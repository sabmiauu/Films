@extends('layouts.main')

@section('page-title')
  Registro
@endsection

@section('content')

<h1>REGISTRO FILMS</h1>

<form method="POST" action="{{ route('register.store') }}">
    @csrf
    Nombre:<br>
    <input type="text" name="name"><br>
    Correo:<br>
    <input type="text" name="email"><br>
    Contraseña:<br>
    <input type="password" name="password"><br>
    <br>
    <input type="submit" value="Registrarse">
</form>
<br>
<p>¿Ya tienes una cuenta? <a href="{{ route('login') }}">Inicia Sesión</a></p>
@endsection
