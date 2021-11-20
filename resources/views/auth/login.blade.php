@extends('auth/template')

@section('title', 'Iniciar Sesión')

@php
    $registerLink = true;
@endphp

@section('form')

<h1 class="h3 mb-4 fw-normal text-white text-center">Iniciar Sesión</h1>

<form method="POST" action="{{ route('auth.login') }}">
    @csrf

    <div class="form-floating">
        <input name="email" type="input" class="form-control" id="email" placeholder="E-mail" required>
        <label for="email">E-mail</label>
    </div>
    <div class="form-floating">
        <input name="password" type="password" class="form-control mb-0" id="password" placeholder="Password" required>
        <label for="password">Password</label>
    </div>

    @if ($message = Session::get('message'))
        <div class="alert alert-danger mt-2">
            <span>{{ $message }}</span>
        </div>
    @endif

    @if ($errors->count() > 0)
        <div class="alert alert-danger mt-2">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <button class="w-100 btn btn-lg btn-info text-white mt-2" type="submit">Ingresar</button>
</form>

@endsection
