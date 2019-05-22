@extends('layouts.main')

@section('page-title')
  Lista de géneros
@endsection

@section('content')
    <h1>Géneros</h1>
    <p><a href="{{ route('genres.create') }}">NUEVO GÉNERO</a></p>
    <p>Estos son todos los géneros de películas.</p>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($genres as $item)
            <tr>
                <th style="padding-right: 20px;">{{ $item->id }}</th>
                <th style="padding-right: 20px;">{{ $item->name }}</th>
                <th>
                    <a href="{{ route('genres.show', ['genre' => $item]) }}">Ver</a><br>
                    <a href="{{ route('genres.edit', ['genre' => $item]) }}">Editar</a>
                    <form method="POST" action=" {{ route('genres.delete', ['genre' => $item]) }}">
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
