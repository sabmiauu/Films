@extends('layouts.main')

@section('page-title')
  Editar {{ $film->name }}
@endsection

@section('content')
    <h1>EDITAR PELÍCULA</h1>

    <form method="POST" action="{{ route('films.update', ['film' => $film]) }}">
        @csrf
        {{ method_field('PUT') }}
        Nombre:<br>
        <input type="text" name="film[name]" value="{{ $film->name }}">
        <br>
        Año:<br>
        <input type="text" name="film[year]" value="{{ $film->year }}">
        <br>
        Duración:<br>
        <input type="text" name="film[duration]" value="{{ $film->duration }}">
        <br>
        Trailer:<br>
        <input type="text" name="film[trailer]" value="{{ $film->trailer }}">
        <br>
        Género:<br>
        <select name="film[genre_id]">
            <option value="{{ $film->genre_id }}">{{ $film->genre->name}}</option>
            @foreach($genres as $item)
                <option value="{{ $item->id }}">
                    {{ $item->name }}
                </option>
            @endforeach
        </select>
        <br><br>
        <input type="submit" value="Guardar">
    </form>
@endsection
