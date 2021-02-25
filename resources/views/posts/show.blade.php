@extends('layouts.app')

@section('content')
<div class="container">
    <div class="post">
        <h1> {{$post->user->name}} </h1>
        <h3> {{$post->description}} </h3>
    </div>
</div>
@endsection
