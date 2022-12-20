@extends('layouts.app')

@section('title','Login')

@section('content')

    @if(session('status'))
        <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
            <strong> {{ session('status') }}</strong>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

<div class="row justify-content-center" style="min-height:768px">
    <div class="col-lg-6">
    <div class="card mt-2">
        <div class="card-header">
            <h1>Iniciar Sesion</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('login.response') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Correo</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email')}}" placeholder="Ingrese su correo electronico" >
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Ingrese su contraseña" >
                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="d-grid gap-2 mb-3">
                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                </div>

                <div class="mb-3 text-center">
                    <a href="{{ route('password.request') }}" class="fs-6">¿Olvido la Contraseña?</a>
                </div>

            </form>
        </div>
    </div>
  </div>
</div>
@endsection
