@extends('layouts.app')

@section('title','Recovery Password')

@section('content')
<div class="row justify-content-center" style="min-height:768px">
    <div class="col-lg-6">
    <div class="card mt-5">
        <div class="card-header">
            <h1>Recuperar Contraseña 1/2</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('password.email') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Correo</label>
                    <input type="email" name="email" class="form-control" placeholder="Ingrese su correo electronico" required>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Enviar Correo</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
@endsection
