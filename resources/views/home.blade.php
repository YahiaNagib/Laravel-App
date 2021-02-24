@extends('layouts.app')

@section('content')
<div class="container">
    @if(isset($user))
    <h1> Hello World! {{ $user->name ?? '' }} </h1>
        @foreach($user->posts as $post)
            <div class="post">
                <h2> {{$post->description}} </h2>
            </div>
        @endforeach

    @else 
        <h1> Invalid Id </h1>
    @endif
</div>
@endsection
