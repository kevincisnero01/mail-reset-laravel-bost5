@extends('layouts.app')

@section('title','Reset Password')

@section('content')

@if(session('status'))
    <div class="alert alert-info alert-dismissible fade show mt-2 mb-2" role="alert">
        <strong> {{ session('status') }}</strong>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="row justify-content-center" style="min-height:768px">
    <div class="col-lg-6">
    <div class="card mt-5">
        <div class="card-header">
            <h1>Recuperar Contraseña  <span class="badge text-bg-primary">2/2</span> </h1>
        </div>
        <div class="card-body">
            <form action="{{ route('password.update') }}" method="post">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="mb-3">
                    <label for="email" class="form-label">Correo</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email')}}" placeholder="Ingrese su email">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Ingrese su contraseña nueva">
                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirme Contraseña</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Repita la contraseña nueva">
                    @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Resetear Contraseña</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
@endsection
