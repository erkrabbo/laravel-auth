@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
    </div>
    @auth
        <div class="d-flex justify-content-end align-items-center">
            <a href="#" class="btn btn-warning btn-sm mx-2">EDIT</a>
            <button class="btn btn-danger btn-sm">&cross;</button>
        </div>
    @endauth
</div>
@endsection
