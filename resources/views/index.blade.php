


@extends('layouts.app')

@section('title', 'Movies')

@section('content')

    <div class="grid grid-cols-4 gap-4">
        @foreach ( $movies as $movie )

            <div class="p-4 border border-gray-200 rounded">
                <x-card :title="$movie['title']" :vote="$movie['vote']">
                    Movie:
                </x-card>
            </div>

        @endforeach
    </div>

@endsection