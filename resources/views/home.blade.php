@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row flex-column align-items-center">
        <h1><a href="{{route('post.index')}}">CLICCAMI PER VEDERE I POST</a></h1>
        <h3><a href="{{route('login')}}">CLICCAMI SE SEI UN AMMINISTRATORE</a></h3>
    </div>
</div>
@endsection
