@extends('layouts.main')

@section('page-title')
  Nueva lista
@endsection

@section('content')
  <h1>NUEVA LISTA</h1>

  <form method="POST" action="{{ route('collections.store') }}">
    @csrf
    Nombre:<br>
    <input type="text" name="collection[name]" value="">
    <br>
    Descripción:<br>
    <textarea name="collection[description]" value=""></textarea>
    <br>
    <input type="submit" value="Crear">
  </form>
@endsection
