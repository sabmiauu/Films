@extends('layouts.main')

@section('page-title')
  Lista de películas
@endsection

@section('content')
    <h1>Películas</h1>
    <p><a href="{{ route('films.create') }}">NUEVA PELÍCULA</a></p>
    <p>Éstas son todas tus películas</p>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Año</th>
                <th>Duración</th>
                <th>Trailer</th>
                <th>Género</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($films as $item)
            <tr>
                <th style="padding-right: 20px;">{{ $item->id }}</th>
                <th style="padding-right: 20px;">{{ $item->name }}</th>
                <th style="padding-right: 20px;">{{ $item->year }}</th>
                <th style="padding-right: 20px;">{{ $item->duration }}</th>
                <th style="padding-right: 20px;">
                    @if($item->trailer == null)
                    No Disponible
                    @else
                    <a href="{{ $item->trailer }}">Ver Trailer</a>
                    @endif

                </th>
                <th style="padding-right: 20px;">{{ $item->genre->name }}</th>


                <th>
                    <a href="{{ route('films.show', ['film' => $item]) }}">Ver</a><br>
                    <a href="{{ route('films.edit', ['film' => $item]) }}">Editar</a>
                    <form method="POST" action="{{ route('films.delete', ['film' => $item]) }}">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" value="Eliminar">
                    </form>

                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
