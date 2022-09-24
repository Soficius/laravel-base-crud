@extends('layouts.main')
@section('content')
    <div class="small-container bg-white">
        <h1>{{ $comic->title }}</h1>
        <div class="details d-flex">
            <p class="w-75">{{ $comic->description }}</p>
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div>
        <a href="{{ route('comics.edit', $comic->id) }}" class="blue border rounded p-1">modifica comic</a>
        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="pt-2">
            @csrf
            @method('DELETE')
            <button type="submit" class="p-1 rounded">Elimina comic</button>
        </form>
    </div>
    <div class="small-container bg-gray">
        <div class="wrap">
            <div class=" p-r flex-c-col w-47">
                <h3 class="ptb-1">Talent</h3>
                <hr />
                <div class="flex-c-row ptb-1">
                    <div class="w-30">
                        Art by:
                    </div>
                    <div class="w-70">
                        {{ $comic->type }},

                    </div>
                </div>
                <hr />
                <div class="flex-c-row ptb-1">
                    <div class="w-30">
                        Written By:
                    </div>
                    <div class="w-70">
                        {{ $comic->type }},
                    </div>
                </div>
                <hr />
            </div>
            <div class="flex-c-col w-47">
                <h3 class="ptb-1">Specs</h3>
                <hr />
                <div class="flex-c-row ptb-1">
                    <div class="w-30">Series:</div>
                    <div class="w-70">{{ $comic->series }}</div>
                </div>
                <hr>
                <div class="flex-c-row ptb-1">
                    <div class="w-30">U.s Price:</div>
                    <div class="w-70">
                        {{ $comic->price }}
                    </div>
                </div>
                <hr>
                <div class="flex-c-row ptb-1">
                    <div class="w-30">On Sale Date:</div>
                    <div class="w-70">{{ $comic->sale_date }}</div>
                </div>
                <hr>
            </div>
        </div>
    </div>
    <div class="small-c-plr flex-c-row bg-gray border-top">
        <div class="flex-c-row w-25 j-between border-lr p-1">
            <span>DIGITAL COMICS</span>
            <i class="cta-pad-normal"></i>
        </div>
        <div class="flex-c-row w-25 j-between border-r p-1">
            <span>SHOP DC</span>
            <i class="cta-comics-normal"></i>
        </div>
        <div class="flex-c-row w-25 j-between border-r p-1">
            <span>COMIC SHOP LOCATOR</span>
            <i class="cta-pointer-normal"></i>
        </div>
        <div class="flex-c-row w-25 j-between border-r p-1">
            <span>SUBSCRIPTIONS</span>
            <i class="cta-shirt-normal"></i>

        </div>
    </div>
@endsection
