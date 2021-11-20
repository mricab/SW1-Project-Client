@extends('welcome/template')

@section('title', 'Smart Document Storage')

@section('navlinks')
    <a class="nav-link text-white-50" href="/register">Registrarse</a>
@endsection

@section('welcome-main')
    <div class="row py-lg-8">
        <div class="col-10 mx-auto">
            <h1 class="font-weight-light mb-3 text-white">SmartDoc</h1>
            <p class="lead text-white">Bienvenido a la aplicación de almacenamiento inteligente de documentos SmartDoc.</p>
            <a type="button" class="btn btn-info text-white mt-3" href="/login">Ingresar</a>
    </div>
@endsection

@section('welcome-footer')
    <div class="row">
        <div class="col-12">
            <p class="text-center text-light pb-3 mb-3 border-bottom">
                Este proyecto fue realizado utilizando el servicio <a class="text-white" href="https://www.ibm.com/cloud/watson-discovery">Watson Discovery</a> de IBM.
            </p>
            <p class="text-center text-white">
                &copy; Fernando Ameller, Jimmy García, Marcelo Rios, Jherson Rodriguez y Willy Vargas.
            </p>
        </div>
    </div>
@endsection
