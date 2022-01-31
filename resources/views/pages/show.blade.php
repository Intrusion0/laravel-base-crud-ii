@extends('layouts.main-layout')
@section('content')
    
<div class="container-film">
    <div class="title">
        Title: 
        <span>
            {{ $movie->title }}
        </span>
    </div>
    <div class="subtitle">
        Subtile:
        <span>
            {{ $movie->subtitle }}
        </span>
    </div>
    <div class="release_date">
        Release date: 
        <span>
            {{ $movie->release_date }}
        </span>
    </div>
</div>

@endsection