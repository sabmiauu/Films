@extends('layouts.main')

@section('page-title')
  Inicio de sesión
@endsection

@section('content')
<h1>INICIO DE SESIÓN</h1>

<form method="POST" action="{{ route('users.authenticate') }}">
    @csrf
    Correo:<br>
    <input type="text" name="email"><br>
    Contraseña:<br>
    <input type="password" name="password"><br>
    <br>
    <input type="submit" value="Iniciar Sesión">
</form>
<br>
<p>¿No tienes una cuenta? <a href="{{ route('users.register') }}">Regístrate</a></p>
@endsection
