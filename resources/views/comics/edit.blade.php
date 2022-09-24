@extends('layouts.main')
@section('content')
    <div class="container bg-blu flex-c-col align-center">
        <h3 class="p-1">Modifica Comic</h3>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="p-1">
                <label for="name">Title</label>
                <input type="text" id="name" placeholder="Titolo Comic" name='title' value="{{ $comic->title }}">
            </div>
            <div class="p-1">
                <label for="number">Price</label>
                <input type="number" id="number" placeholder="prezzo" name='price' value="0"
                    value="{{ $comic->price }}">
            </div>
            <div class="p-1">
                <label for="serie">Series</label>
                <input type="text" id="serie" placeholder="serie" name='series' value="{{ $comic->series }}">
            </div>
            <div class="p-1">
                <label for="date">Sale date</label>
                <input type="date" id="date" placeholder="date" name='sale_date' value="{{ $comic->sale_date }}">
            </div>
            <div class="p-1">
                <label for="type">type</label>
                <input type="text" id="type" placeholder="type" name='type' value="{{ $comic->type }}">
            </div>
            <div class="p-1">
                <label for="description">description</label>
                <textarea id="description" placeholder="description" class="p-1" name="description">{{ $comic->description }}</textarea>
            </div>
            <div class="p-1">
                <label for="url "> URL del comic: </label>
                <input type="url" name="thumb" placeholder="URL del comic" value="{{ $comic->thumb }}">
            </div>
            <div>
                <button type="submit">Salva</button>
            </div>
    </div>
@endsection
