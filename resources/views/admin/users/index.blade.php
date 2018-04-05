@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-sm-3">
            <!-- Empty Col -->
        </div>
        <div class="col-sm-6">
            <h1>Users</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Role</th>
                    <th>Active</th>
                    <th>Created</th>
                    <th>Updated</th>

                </tr>
                </thead>
                <tbody>
                @if($users)
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role ? $user->role->name : 'User without Role'}}</td>
                            <td>{{$user->is_active == 0 ? 'Active' : 'Not Active'}}</td>
                            <td>{{$user->created_at->diffForHumans()}}</td>
                            <td>{{$user->updated_at->diffForHumans()}}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <a href="{{route('users.create')}}">
                <div class="btn btn-success">
                    Create User
                </div>
            </a>
        </div>
        <div class="col-sm-3">
            <!-- Empty Col -->
        </div>
    </div>



@endsection
