@extends('layouts.main')

@section('page-title')
  Lista: {{ $collection->name }}
@endsection

@section('content')
    <h1>{{ $collection->name }}</h1>
    <p>{{ $collection->description }}</p>
    <h2>Películas</h2>
    <ul>
        @foreach($collection->film as $item)
            <li>
                {{ $item->name }}
            </li>
        @endforeach
    </ul>
    <p><a href="{{ route('collections.index') }}">Regresar</a></p>
@endsection
