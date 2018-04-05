@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-sm-3">
            <!-- empty col -->
        </div>
        <div class="col-sm-6">
            <h1>Comments</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Thread ID</th>
                    <th>User ID</th>
                    <th>Body</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                </tr>
                </thead>
                <tbody>
                @if($comments)
                    @foreach($comments as $comment)
                        <tr>
                            <td>{{$comment->id}}</td>
                            <td>{{$comment->thread->id}}</td>
                            <td>{{$comment->user_id}}</td>
                            <td>{{$comment->body}}</td>
                            <td>{{$comment->created_at}}</td>
                            <td>{{$comment->updated_at}}</td>


                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
        <div class="col-sm-3">
            <!-- empty col -->
        </div>
    </div>

@endsection
