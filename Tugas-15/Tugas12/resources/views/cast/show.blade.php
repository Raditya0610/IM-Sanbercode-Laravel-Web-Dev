@extends('layouts.master')
@section('title')
    Show Cast
@endsection
@section('content')
<div class="container mt-4">
    <h3>{{ $cast->name }}</h3>
    <p>Age: {{ $cast->age }}</p>
    <p>Bio: {{ $cast->bio }}</p>
    <a href="/cast" class="btn btn-primary">Back</a>
</div>
@endsection