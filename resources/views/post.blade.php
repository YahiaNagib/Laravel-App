@extends('layouts.app')

@section('content')
<div class="container">
    <a href="#" class="btn btn-primary"> Add </a>
    @foreach ($posts as $post) 
    <h1> {{$post->user->name}} </h1>
    <h3> {{$post->description}} </h3>
    @endforeach
</div>
@endsection
