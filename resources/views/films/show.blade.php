@extends('layouts.main')

@section('page-title')
  {{ $film->name }}
@endsection

@section('content')
<body>
    <h1>{{ $film->name }}</h1>
    <p>Año: {{ $film->year }}</p>
    <p>Duración: {{ $film->duration }}</p>
    <p>Trailer: <a href="{{ $film->trailer }}">{{ $film->trailer }}</a></p>
    <p>Género: {{ $film->genre->name }}</p><br>

    <p>
    @include('films.partials.film-with-video', ['film' => $film])
    </p>


    <br>
    <p><a href="{{ route('films.index') }}">Regresar</a></p>
@endsection
