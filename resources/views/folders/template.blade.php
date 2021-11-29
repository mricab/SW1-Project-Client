@extends('main')

@section('title', 'Gestión de Documentos')

@section('css')
@endsection

@section('js')
@endsection

@section('content')

    <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">

        <header class="mb-auto">
            <!--Main Header-->
            <div>
                <a href="/"><h3 class="float-md-start mb-0 text-white">SmartDoc</h3></a>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <form method="POST" action="{{ route('auth.logout') }}">
                        @csrf
                        <button class="btn btn-link nav-link text-white-50" type="submit">Salir</button>
                    </form>
                </nav>
            </div>
        </header>

        <main class="">
            @yield('body')
        </main>

        <footer class="py-3 mt-auto mb-4">
        </footer>

    </div>
@endsection
