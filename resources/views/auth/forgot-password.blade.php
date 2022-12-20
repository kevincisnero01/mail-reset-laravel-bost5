@extends('layouts.app')

@section('title','Recovery Password')

@section('content')

@if(session('status'))
    <div class="alert alert-info alert-dismissible fade show mt-2 mb-2" role="alert">
        <strong> {{ session('status') }}</strong>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="row justify-content-center">
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
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
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
