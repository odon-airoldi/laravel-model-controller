


@extends('layouts.app')

@section('title', 'Home')

@section('content')

ciaoo

<x-card>
    Carddddd
</x-card>

@foreach ( $movies as $movie )

    {{ $movie['title'] }}<br>

@endforeach

@endsection