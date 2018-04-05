@extends('layouts.blog-forum')
@section('content')
    <!-- Blog Post -->

    <!-- Title -->
    <br>
    <br>
    <h1>{{$thread->title}}</h1>

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
    @if(Session::has('comment_message'))
        {{session('comment_message')}}
    @endif

    <!-- Thread Comments Form -->
    <form action="post">
            @method('post')


    </form>

    <!-- Blog Comments -->

    {{--@if(Session::has('comment_message'))--}}
        {{--{{session('comment_message')}}--}}
    {{--@endif--}}

    {{--<!-- Comments Form -->--}}
    {{--@if(Auth::check())--}}
        {{--<div class="well">--}}
            {{--<h4>Leave a Comment:</h4>--}}
            {{--{!! Form::open(['method'=> 'POST', 'action' => 'PostCommentsController@store']) !!}--}}
            {{--<input type="hidden" name="post_id" value="{{$post->id}}">--}}
            {{--<div class="form-group">--}}
                {{--{!! Form::label('body', 'Body:') !!}--}}
                {{--{!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=> 3]) !!}--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--{!! Form::submit('Submit comment', ['class'=>'btn btn-primary']) !!}--}}
            {{--</div>--}}
            {{--{!! Form::close() !!}--}}
        {{--</div>--}}
    {{--@endif--}}
    {{--<hr>--}}

    {{--<!-- Posted Comments -->--}}

    {{--<!-- Comment -->--}}
    {{--@if(count($comments) >0)--}}
        {{--@foreach($comments as $comment)--}}
            {{--<div class="media">--}}
                {{--<a class="pull-left" href="#">--}}
                    {{--<img height="64" class="media-object" src="{{$comment->photo}}" alt="">--}}
                {{--</a>--}}
                {{--<div class="media-body">--}}
                    {{--<h4 class="media-heading">{{$comment->author}}--}}
                        {{--<small>{{$comment->created_at->diffForHumans()}}</small>--}}
                    {{--</h4>--}}
                    {{--<p>{{$comment->body}}</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--@endforeach--}}
    {{--@endif--}}
    {{--<!-- Comment -->--}}
    {{--<div class="media">--}}
        {{--<a class="pull-left" href="#">--}}
            {{--<img class="media-object" src="http://placehold.it/64x64" alt="">--}}
        {{--</a>--}}
        {{--<div class="media-body">--}}
            {{--<h4 class="media-heading">Start Bootstrap--}}
                {{--<small>August 25, 2014 at 9:30 PM</small>--}}
            {{--</h4>--}}
            {{--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.--}}
            {{--<!-- Nested Comment -->--}}
            {{--<div class="media">--}}
                {{--<a class="pull-left" href="#">--}}
                    {{--<img class="media-object" src="http://placehold.it/64x64" alt="">--}}
                {{--</a>--}}
                {{--<div class="media-body">--}}
                    {{--<h4 class="media-heading">Nested Start Bootstrap--}}
                        {{--<small>August 25, 2014 at 9:30 PM</small>--}}
                    {{--</h4>--}}
                    {{--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- End Nested Comment -->--}}
        {{--</div>--}}
    {{--</div>--}}

@endsection