@extends('layouts.main-layout')
@section('content')

    <h2>
        <a href="{{ route('create') }}">Create new Movie</a>
    </h2>

    <ul>
        @foreach ($movies as $movie)
            <li>
                <a href="{{ route('show', $movie->id) }}">
                    Title: 
                    <span>
                        {{ $movie->title }}
                    </span>
                    <span>
                        <a href="{{ route('edit', $movie->id) }}">EDIT</a>
                    </span>
                    <span class="delete">
                        <a href="{{ route('delete', $movie->id) }}">DELETE</a>
                    </span>
                </a>
            </li>
        @endforeach
    </ul>

@endsection