@extends('layouts.main-layout')
@section('content')

    <ul>
        @foreach ($movies as $movie)
            <li>
                <a href="{{ route('show', $movie->id) }}">
                   Title: 
                   <span>
                        {{ $movie->title }}
                   </span>
                </a>
            </li>
        @endforeach
    </ul>

@endsection