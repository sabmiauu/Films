@extends('layouts.main')

@section('page-title')
  Editar {{ $genre->name }}
@endsection

@section('content')
    <h1>EDITAR GÉNERO</h1>

    <form method="POST" action="{{ route('genres.update', ['genre' => $genre]) }}">
        @csrf
        {{ method_field('PUT') }}
        Nombre:<br>
        <input type="text" name="genre[name]" value="{{ $genre->name }}">
        <br><br>
        <input type="submit" value="Guardar">
    </form>
@endsection
