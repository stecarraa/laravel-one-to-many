@extends('layouts.app')
@section('title', 'post')


@section('content')


<div class="container d-flex p-5 text-center">
    <div class="row justify-content-center w-100">
        <div class="col-6">
            <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
                @csrf
                @method('PUT')
                <!-- Name input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form4Example1" class="form-control" name="title" value="{{old('title', $post->title)}}"/>
                  <label class="form-label" for="form4Example1">Title</label>
                </div>
              
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form4Example2" class="form-control" name="post_image" value="{{old('title', $post->post_image)}}"/>
                  <label class="form-label" for="form4Example2">Image</label>
                </div>
              
                <!-- Message input -->
                <div class="form-outline mb-4">
                  <textarea class="form-control" id="form4Example3" rows="4" name="post_content" >{{old('title', $post->post_content)}}</textarea>
                  <label class="form-label" for="form4Example3">Description</label>
                </div>
              
              
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
              </form>
        </div>
    </div>
</div>
@endsection