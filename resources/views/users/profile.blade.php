@extends('layouts.main')

@section('page-title')
  Perfil de {{ Auth::user()->name }}
@endsection

@section('content')
<h1>PERFIL</h1>
@if (Auth::check())
    Bienvenido {{ Auth::user()->name }}<br><br>
    <a href="{{ route('users.logout') }}">Cerrar sesión</a>
@else
    El usuario no tiene sesión.
    <ul>
        <li><a href="{{ route('users.register') }}">Regístrate</a></li>

    </ul>
@endif
@endsection
