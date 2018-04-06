@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-sm-3">
            <!-- Empty Col -->
        </div>
        <div class="col-sm-6">
            <h1>Create Thread</h1>
            {!! Form::open(['method'=>'POST', 'action'=> 'AdminThreadsController@store', 'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('body', 'Body:') !!}
                {!! Form::textarea('body', null , ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category_id', 'Category') !!}
                {!! Form::select('category_id', [''=>'Choose category'] + $categories , null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', null , ['class'=>'form-control']) !!}
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