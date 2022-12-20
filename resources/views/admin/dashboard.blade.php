@extends('layouts.app')

@section('title','Welcome')

@section('content')

<!-- Jumbotron -->
<div class="p-4 shadow-4 rounded-3 mt-5" style="background-color: hsl(0, 0%, 94%);">
  <h2>Hola, Usuario {{ auth()->user()->name }}.</h2>
  <p>
    Bienvenido al proyecto para <b>recuperar contraseña por email</b>.
  </p>

  <hr class="my-4" />
    <p>
        ¿Quieres ver la lista de usuarios?.
    </p>
    <a href="{{ route('users.index') }}" class="btn btn-primary">
    Usuarios
    </a>
</div>
<!-- Jumbotron -->

@endsection
