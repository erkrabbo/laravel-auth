@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($posts as $post)
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $post->title }}</div>

                    <div class="card-body">
                        @auth
                        <button class="btn btn-danger">&cross;</button>
                        <a href="#" class="btn btn-warning">EDIT</a>
                        @endauth
                        <p>{{ $post->content }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
