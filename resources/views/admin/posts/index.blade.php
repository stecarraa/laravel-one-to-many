@extends('layouts.app')
@section('title', 'Index')

@section('content')
    <div class="container-lg">
    
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Author</th>
                    <th scope="col" colspan="2">Title</th>
                    <th scope="col">Post Date</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Show</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td><a href="{{route('admin.posts.show', $post->id)}}">{{$post->id}}</a></th>
                        <td>{{$post->author}}</td>
                        <td colspan="2">{{$post->title}}</td>
                        <td>{{$post->post_date}}</td>
                        <td>
                            <a href="{{route('admin.posts.edit',  $post->id)}}">
                                <button type="button" class="btn btn-sm btn-success">Edit</button>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('admin.posts.destroy', $post->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                        <td>
                            <a href="{{route('admin.posts.show',  $post->id)}}">
                                <button type="button" class="btn btn-sm btn-primary">Show Post</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <ul>
        </ul>
    </div>
@endsection