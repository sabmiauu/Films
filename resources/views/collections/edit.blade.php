@extends('layouts.main')

@section('page-title')
  Editar lista
@endsection

@section('content')
    <h1>EDITAR LISTA</h1>

    <form method="POST" action="{{ route('collections.update', ['collection' => $collection]) }}">
        @csrf
        {{ method_field('PUT') }}
        Nombre:<br>
        <input type="text" name="collection[name]" value="{{ $collection->name }}">
        <br>
        Descripción:<br>
        <textarea name="collection[description]">{{ $collection->description }}</textarea>
        <br>
        <input type="submit" value="Guardar">
    </form>
@endsection
