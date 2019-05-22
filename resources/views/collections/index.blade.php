@extends('layouts.main')

@section('page-title')
  Listas de películas
@endsection

@section('content')
    <h1>Listas de Películas</h1>
    <p><a href="{{ route('collections.create') }}">NUEVA LISTA</a></p>
    <p>Éstas son todas tus listas de películas.</p>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($collections as $item)
            <tr>
                <th style="padding-right: 20px;">{{$item->id}}</th>
                <th style="padding-right: 20px;">{{$item->name}}</th>
                <th style="padding-right: 20px;">{{$item->description}}</th>
                <th>
                    <a href="{{ route('collections.show', ['collection' => $item]) }}">Ver</a><br>
                    <a href="{{ route('collections.edit', ['collection' => $item]) }}">Editar</a><br>
                    <a href="{{ route('collection.film.edit', ['collection' => $item]) }}">Modificar películas</a>
                    <form method="POST" action="{{ route('collections.delete', ['collection' => $item]) }}">
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
