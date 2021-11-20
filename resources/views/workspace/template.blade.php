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
                <!--Workspace Header-->
                <ul class="nav justify-content-center">
                    <li class="nav-item mx-1">
                        <a class="nav-link {{ $active == "home" ? 'text-white border-bottom' : 'text-white-50' }}" href="{{ route('workspace.home') }}"><i class="fas fa-home"></i></i></a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link {{ $active == "search" ? 'text-white border-bottom' : 'text-white-50' }}" href="{{ route('workspace.search') }}"><i class="fas fa-search"></i></a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link {{ $active == "categories" ? 'text-white border-bottom' : 'text-white-50' }}" href="{{ route('workspace.categories') }}"><i class="fas fa-tags"></i></a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link {{ $active == "upload" ? 'text-white border-bottom' : 'text-white-50' }}" href="{{ route('workspace.upload') }}"><i class="fas fa-cloud-upload-alt"></i></a>
                    </li>
                </ul>
            </div>
        </header>

        <main class="">
            @yield('body')
        </main>

        <footer class="py-3 mt-auto mb-4">
        </footer>

    </div>
@endsection
