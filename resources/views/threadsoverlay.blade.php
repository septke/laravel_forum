
@extends('layouts.blog-forum')
@section('content')

    <div class="row">

        <div class="col-sm-12">
            <h1>Threads</h1>
            <h2>Choose the thread you want to read</h2>
            <table class="table">
                <thead>
                <tr>
                    <th>Thread #</th>
                    <th></th>
                    <th>User</th>
                    <th>Title</th>
                    <th>Body</th>
                </tr>
                </thead>
                <tbody>
                @if($threads)
                    @foreach($threads as $thread)
                        <tr>
                            <td>{{$thread->id}}</td>
                            <td><img height="50" src="{{$thread->user->photo ? $thread->user->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
                            <td>{{$thread->user->name}}</td>
                            <td><a href="{{url('/thread/' . $thread->id)}}">{{$thread->title}}</a></td>
                            <td>{{str_limit($thread->body, 40)}}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>

    </div>
@endsection