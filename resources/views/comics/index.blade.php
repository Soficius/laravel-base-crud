@extends('layouts.main')
@section('content')
    <div class="container box">
        @forelse($comics as $comic)
            <div class="card">
                <a href="{{ route('comics.show', $comic->id) }}">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" />
                    <h3>{{ $comic->title }}</h3>
                    <a href="{{ route('comics.edit', $comic->id) }}" class="blue">modifica comic</a>
                </a>
            </div>

        @empty
        @endforelse
    </div>
@endsection
