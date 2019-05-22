@extends('layouts.main')

@section('page-title')
  {{ $genre->name }}
@endsection

@section('content')
    <h1>{{ $genre->name }}</h1>
    <p><a href="{{ route('genres.index') }}">Regresar</a></p>
@endsection
