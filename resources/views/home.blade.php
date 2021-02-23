@extends('layouts.app')

@section('content')
<div class="container">
    <h1> Hello World! {{ $name ?? '' }} </h1>
</div>
@endsection
