@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-sm-2">
            <!-- Empty Col-->
        </div>
        <div class="col-sm-8">
            <h1>Threads</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                </tr>
                </thead>
                <tbody>
                @if($threads)
                    @foreach($threads as $thread)
                        <tr>
                            <td>{{$thread->id}}</td>
                            <td>{{$thread->user->name}}</td>
                            <td><a href="{{url('/thread/' . $thread->id)}}">{{$thread->title}}</a></td>
                            <td>{{str_limit($thread->body, 40)}}</td>
                            <td>{{$thread->created_at}}</td>
                            <td>{{$thread->updated_at}}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <a href="{{route('threads.create')}}">
                <div class="btn btn-success">
                    Create Thread
                </div>
            </a>
        </div>

        <div class="col-sm-2">
            <!-- Empty Col-->
        </div>
    </div>

@endsection
