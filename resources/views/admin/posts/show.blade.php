@extends('layouts.app')
@section('title', 'post')


@section('content')


<div class="container d-flex p-5 text-center">
    <div class="row justify-content-center w-100">
        <div class="col-6">
            <div class="card">
                <img class="card-img-top" src="{{$post->post_image}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$post->title}}</h5>
                  <p class="card-text">{{$post->post_content}}</p>
                  </div>
                <div class="card-footer">
                  <small class="text-muted"> <p>Published by: {{$post->author}} on the: {{$post->post_date}}</p></small>
                  <a href="{{route('admin.posts.index')}}" class="btn btn-primary btn-sm w-50">Back to Index</a>
                </div>
              
              </div>
        </div>
    </div>
</div>
@endsection
