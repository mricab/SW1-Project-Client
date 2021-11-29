@extends('folders/template')

@section('css')
@endsection

@section('js')
@endsection

@section('body')

    <div class="row">
        <div class="col-12 form-signin">
            <h1 class="h3 mb-4 fw-normal text-white text-center">Nueva Carpeta</h1>

            <!--Form-->
            <form method="POST" action="{{ route('folders.create') }}">
                @csrf

                <div class="form-floating">
                    <input name="name" type="input" class="form-control" id="name" placeholder="Nombre" required>
                    <label for="name">Nombre</label>
                </div>
                <div class="form-floating">
                    <textarea name="description" type="input" rows="5" class="form-control" id="description" placeholder="Descripción" required></textarea>
                    <label for="description">Descripción</label>
                </div>
                <div class="form-floating">
                    <select name="language" class="form-select">
                        <option value="es_es" selected>Español</option>
                        <option value="en_us">Inglés</option>
                    </select>
                    <label for="language">Idioma</label>
                </div>

                @if ($errors->count() > 0)
                    <div class="alert alert-danger mt-2">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <button class="w-100 btn btn-lg btn-info text-white mt-2" type="submit">Crear</button>
            </form>

        </div>
    </div>
@endsection
