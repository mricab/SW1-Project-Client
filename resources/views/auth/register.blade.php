@extends('auth/template')

@section('title', 'Iniciar Sesión')

@php
    $loginLink = true;
@endphp

@section('form')

<h1 class="h3 mb-4 fw-normal text-white text-center">Registrarse</h1>

<form method="POST" action="{{ route('auth.register') }}">
    @csrf

    <div class="form-floating">
        <input name="name" type="input" class="form-control" id="name" placeholder="Nombre" required>
        <label for="name">Empresa</label>
    </div>
    <div class="form-floating">
        <input name="email" type="input" class="form-control" id="email" placeholder="E-mail" required>
        <label for="email">E-mail</label>
    </div>
    <div class="form-floating">
        <input name="password" type="password" class="form-control mb-0" id="password" placeholder="Password" required>
        <label for="password">Password</label>
    </div>
    <div class="form-floating mt-0">
        <input name="password_confirmation" type="password" class="form-control mb-0" id="password_confirmation" placeholder="Password" required>
        <label for="password_confirmation">Confirmar Password</label>
    </div>

    @if ($errors->count() > 0)
        <div class="alert alert-danger mt-2">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <button class="w-100 btn btn-lg btn-info text-white mt-2" type="submit">Registrarse</button>
</form>

@endsection
