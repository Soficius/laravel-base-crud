@extends('layouts.main')
@section('content')
    <div class="container box">
        @forelse($comics as $comic)
            <div class="card">
                <a href="{{ route('comics.show', $comic->id) }}">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" />
                    <h3>{{ $comic->title }}</h3>
                </a>
            </div>
        @empty
        @endforelse
    </div>
@endsection
