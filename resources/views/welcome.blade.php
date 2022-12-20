@extends('layouts.app')

@section('title','Welcome')

@section('content')

<!-- Jumbotron -->
<div class="p-4 shadow-4 rounded-3 mt-5" style="background-color: hsl(0, 0%, 94%);">
  <h2>Bienvenido</h2>
  <p>
    Este <b>proyecto</b> tiene como fin mostrar el proceso de <b>recuperacion de contraseña</b> por medio de <b>correo electronico</b> que te brinda laravel.
  </p>

  <hr class="my-4" />

  <p>
    Se utilizo la <b>documentacion oficial de laravel</b> para programar y configurar esta funcionalidad.
  </p>
  <a href="https://laravel.com/docs/8.x/passwords" target="_blank" class="btn btn-primary">
    Aprender mas...
  </a>
</div>
<!-- Jumbotron -->

@endsection
