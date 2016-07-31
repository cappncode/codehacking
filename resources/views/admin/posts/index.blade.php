@extends('layouts.admin')


@section('content')

    <h1>Admin Posts</h1>

    @if(Session::has('deleted_post'))

        <div class="alert alert-danger">
            {{session('deleted_post')}}
        </div>

    @endif

    @if(Session::has('updated_post'))

        <div class="alert alert-info">
            {{session('updated_post')}}
        </div>

    @endif

    @if(Session::has('created_post'))

        <div class="alert alert-success">
            {{session('created_post')}}
        </div>

    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Title</th>
                <th>Category</th>
                <th>Body</th>
                <th>Owner</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>

        @if($posts)

            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><img height="50" class="img-rounded" src="{{$post->photo ? $post->photo->file : '/images/placeholder_post.jpg'}}" alt=""></td>
                    <td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->title}}</a></td>
                    <td>{{$post->category ? $post->category->name : 'No Category'}}</td>
                    <td>{{str_limit($post->body, $limit = 20, $end = ' ...')}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                </tr>

            @endforeach

        @endif
        </tbody>
    </table>


@stop

