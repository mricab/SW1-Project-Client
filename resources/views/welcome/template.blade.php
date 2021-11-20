@extends('main')

@section('content')

    <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">

        <!--Header-->
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0"></h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    @yield('navlinks')
                </nav>
            </div>
        </header>

        <!--Body-->
        <main class="py-5 text-center container">
            @yield('welcome-main')
        </main>

        <!--Footer-->
        <footer class="py-3 mt-auto mb-4">
            @yield('welcome-footer')
        </footer>

    </div>

@endsection
