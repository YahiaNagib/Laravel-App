@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/posts/create" class="btn btn-primary mb-3"> Add Post </a>
    @foreach ($posts as $post) 
    <div class="post">
        <a href="/posts/{{ $post->id }}"> <h1> {{$post->user->name}} </h1></a>
        <h3> {{$post->description}} </h3>
    </div>
    @endforeach
</div>
@endsection
