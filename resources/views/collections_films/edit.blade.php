@extends('layouts.main')

@section('page-title')
  {{ $collection->name }} películas
@endsection

@section('content')
    <h1>{{ $collection->name }}</h1>
    Vamos a añadir o eliminar películas a la lista.

    <form method="POST" action="{{ route('collection.film.update', ['collection' => $collection]) }}">
        @csrf
        {{ method_field('PUT') }}
        <ul>
            @foreach($film as $item)
            <li>
                <input type="checkbox" name="films[]" value="{{ $item->id }}">
                {{ $item->name }}
            </li>
            @endforeach
        </ul>
        <input type="submit" value="Guardar">
    </form>

@endsection
