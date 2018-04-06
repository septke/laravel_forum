@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-sm-3">
            <!-- Empty Col -->
        </div>
        <div class="col-sm-6">
            <h1>Create Category</h1>
            {!! Form::open(['method'=>'POST', 'action'=> 'AdminCategoriesController@store', 'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}
        </div>

        <div class="col-sm-3">
            <!-- Empty Col -->
        </div>
    </div>

    @include('includes.form_error')
@endsection