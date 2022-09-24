@extends('layouts.main')
@section('content')
    {{-- conferma dell'eliminazione di un comic --}}
    @if (session('delete'))
        <div class="green border rounded bg-white p-1 width-400">{{ session('delete') }}</div>
    @endif

    <div class="container box">
        @forelse($comics as $comic)
            <div class="card">
                <a href="{{ route('comics.show', $comic->id) }}">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" />
                    <h3>{{ $comic->title }}</h3>
                    <a href="{{ route('comics.edit', $comic->id) }}" class="blue">modifica comic</a>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Elimina comic</button>
                    </form>
                </a>
            </div>

        @empty
        @endforelse
    </div>
@endsection
{{-- conferma prima di eliminare un comic --}}
@section('js')
    <script>
        const deleteForm = document.querySelectorAll('.delete-form');
        deleteForm.forEach(form => {
            form.addEventListener('submit', (event) => {
                event.preventDefault();
                const hasConfirmed = confirm('sei sicuro di eliminare questo comic?');
                if (hasConfirmed) form.submit();
            });
        });
    </script>
@endsection
