@extends('layouts.app')

@section('title','Usuarios')

@section('content')

@if(session('status'))
    <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
        <strong> {{ session('status') }}</strong>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="row justify-content-center" style="min-height:768px">
    <div class="col-12">
    <div class="card mt-2">
    <div class="card-header">
        <h1>Usuarios</h1>
    </div>
    <div class="card-body">

        <table class="table table-stripet">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        @forelse($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @empty
            <p>No se encontraron elementos</p>
        @endforelse
        </tbody>
        </table>

    </div>
    </div>
  </div>
</div>
@endsection
