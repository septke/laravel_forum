@extends('layouts.blog-forum')
@section('content')
    <!-- Blog Post -->

    <!-- Title -->
    <br>
    <br>
    <h1>{{$thread->title}}</h1>
    <img height="600" src="{{$thread->photo ? $thread->photo->file : 'http://placehold.it/400x400'}}" alt="">
    <!-- Author -->
    <p class="lead">
        by <a href="#">{{$thread->user->name}}</a>
    </p>
    <hr>
    <!-- Date/Time -->
    <p><span class="glyphicon glyphicon-time"></span> Posted on {{$thread->created_at}}</p>
    <hr>
            <!-- Post Content -->
            <p class="lead">{{$thread->body}}</p>
    <hr>
    <!--Thread Comments -->
    @if(count($thread->comments) >0)
        @foreach($thread->comments as $comment)
            <div class="media">
                <div class="media-body">
                    <h4 class="media-heading"><img height="50" src="{{$thread->user->photo ? $thread->user->photo->file : 'http://placehold.it/400x400'}}" alt="">{{$comment->user->name}}
                        <small>{{$comment->created_at->diffForHumans()}}</small>
                    </h4>
                    <p>{{$comment->body}}</p>
                </div>
            </div>
        @endforeach
    @endif
        <hr>
    <!-- Thread Comments Form -->
    @if(Auth::check())
        <div class="well">
            <h4>Leave a Comment:</h4>
            {!! Form::open(['method'=> 'POST', 'action' => 'AdminCommentController@store']) !!}
            <input type="hidden" name="thread_id" value="{{$thread->id}}">
            <div class="form-group">
                {!! Form::label('body', 'Body:') !!}
                {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=> 3]) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Submit Comment', ['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    @endif
@endsection