@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-9">
            <h1>Edit User</h1>
        </div>
    </div>

    <div class="row">


        <div class="col-sm-3">

        </div>
        <div class="col-sm-6">
            {!! Form::model($user, ['method'=>'PUT', 'action'=> ['AdminUsersController@update', $user->id], 'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', $user->name, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'E-mail:') !!}
                {!! Form::text('email', $user->email, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('role_id', 'Role:') !!}
                {!! Form::select('role_id', [''=>'Choose Options'] + $roles , null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', null , ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update User', ['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
            {!! Form::open(['method' => 'DELETE', 'action' => ['AdminUsersController@destroy', $user->id]]) !!}
            <div class="form-group">
                {!! Form::submit('Delete User', ['class'=>'btn btn-danger']) !!}
            </div>
            {!! Form::close() !!}
        </div>
        <div class="col-sm-3">
            <img height="400" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" class="img-responsive" alt="">
        </div>
    </div>
    @include('includes.form_error')
@endsection