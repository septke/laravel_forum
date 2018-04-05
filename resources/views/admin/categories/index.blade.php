@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-sm-3">
            <!-- empty col -->
        </div>
        <div class="col-sm-6">
            <h1>Categories</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                </tr>
                </thead>
                <tbody>
                @if($categories)
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->created_at}}</td>
                            <td>{{$category->updated_at}}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <a href="{{route('categories.create')}}">
                <div class="btn btn-success">
                    Create Categories
                </div>
            </a>
        </div>
        <div class="col-sm-3">
            <!-- empty col -->
        </div>
    </div>

@endsection