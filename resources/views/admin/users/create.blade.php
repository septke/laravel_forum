@extends('layouts.admin')
    @section('content')
        <div class="row">
            <div class="col-sm-3">

            </div>
            <div class="col-sm-6">
                <h1>Create User</h1>
                {!! Form::open(['method'=>'POST', 'action'=> 'AdminUsersController@store', 'files'=>true]) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'E-mail:') !!}
                    {!! Form::text('email', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('role_id', 'Role:') !!}
                    {!! Form::select('role_id', [''=>'Choose Options'] + $roles , null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('photo_id', 'Title:') !!}
                    {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Password:') !!}
                    {!! Form::password('password', ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
            <div class="col-sm-3">

            </div>

        </div>

        @include('includes.form_error')
    @endsection