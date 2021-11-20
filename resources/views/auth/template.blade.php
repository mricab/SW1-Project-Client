@extends('main')

@section('content')

    <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">

        <header class="mb-auto">
            <div>
                <a href="/"><h3 class="float-md-start mb-0 text-white">SmartDoc</h3></a>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    @if ($registerLink ?? false) <a class="nav-link text-white-50" href="/register">Registrarse</a> @endif
                    @if ($loginLink ?? false) <a class="nav-link text-white-50" href="/login">Ingresar</a> @endif
                </nav>
            </div>
        </header>

        <main class="form-signin">
            @yield('form')
        </main>

        <footer class="py-3 mt-auto mb-4">
        </footer>

    </div>
@endsection
