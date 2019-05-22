@extends('layouts.main')

@section('page-title')
  Nueva película
@endsection

@section('content')
    <h1>NUEVA PELÍCULA</h1>

    <form method="POST" action="{{ route('films.store') }}">
        @csrf
        Nombre:<br>
        <input type="text" name="film[name]" value="">
        <br>
        Año:<br>
        <input type="text" name="film[year]" value="">
        <br>
        Duración:<br>
        <input type="text" name="film[duration]" value="">
        <br>
        Trailer:<br>
        <input type="text" name="film[trailer]" value="">
        <br>
        Género:<br>
        <select name="film[genre_id]">
            <option>Elije un género</option>
            @foreach($genres as $item)
                <option value="{{ $item->id }}">
                    {{ $item->name }}
                </option>
            @endforeach
        </select>
        <br><br>
        <input type="submit" value="Crear">
    </form>
@endsection
