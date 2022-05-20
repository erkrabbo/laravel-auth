@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form method="post" action="{{route('post.update', $post)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" class="form-control" id="title" placeholder="Enter title" value="{{ $errors->has('title') ? Request::old('title') : $post->title }}">
            </div>
            <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" name="content" id="content" rows="4">{{ $errors->has('content') ? Request::old('content') : $post->content }}</textarea>
          </div>
            <div class="form-group">
              <label for="slug">Slug</label>
              <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug" value="{{ $errors->has('slug') ? Request::old('slug') : $post->slug }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
@endsection
