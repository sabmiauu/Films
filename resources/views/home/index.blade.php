@extends('layouts.main')

@section('page-title')
  Inicio
@endsection

<!--El nombre 'content' le indica a esa sección que debe aparecer en el layout de main, en donde indicamos 'yield(content)'-->
@section('content')

  <ul>
      @foreach($films as $item)
        <!--<li>{{ $item->name }}</li>-->
        <li>@include('films.partials.film-with-video', ['film' => $item])</li>
      @endforeach
  </ul>

@endsection
