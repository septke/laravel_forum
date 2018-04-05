@extends('layouts.admin')
@section('content')
    <h1>Comments</h1>
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
                    <td>{{$thread->title}}</td>
                    <td>{{$thread->body}}</td>
                    <td>{{$thread->created_at}}</td>
                    <td>{{$thread->updated_at}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection
