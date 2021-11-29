@extends('folders/template')

@section('css')
@endsection

@section('js')
@endsection

@section('body')
    <div class="row">
        <div class="col-12 text-center">
            <h2>Carpetas</h2>
        </div>
    </div>
    <div class="row">
        @isset($containers)
            @foreach ($containers as $c)
            <div class="col-3">

            </div>
            @endforeach
        @endisset
        <div class="col-3">
            <a href="{{ route('folders.new') }}">
                <div class="card ratio ratio-1x1 folder-card-create">
                    <table>
                        <tbody>
                            <tr class="text-center align-middle">
                                <td class="fs-1 text text-white-50 fw-bolder">
                                    <i class="fas fa-plus"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </a>
        </div>
    </div>
@endsection
