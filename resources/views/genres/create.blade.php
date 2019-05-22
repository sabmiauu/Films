@extends('layouts.main')

@section('page-title')
  Nuevo género
@endsection

@section('content')
    <h1>NUEVO GÉNERO</h1>

    <form method="POST" action="{{ route('genres.store') }}">
        @csrf
        Nombre:<br>
        <input type="text" name="genre[name]" value="">
        <br><br>
        <input type="submit" value="Crear">
    </form>
@endsection
