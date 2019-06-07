@extends('layouts.base')

{{-- STYLES --}}
@section('styles')
<style>

</style>
@endsection

{{-- CONTENTE --}}
@section('content')

    <div class="title-page">
        <h1>Grupos de email do usuário NOME_USUARIO</h1>
    </div>

    <form class="row">

        <div class="col-md-6">
            <table class="table table-sm table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Grupo de Email</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>TI Desenvolvimento</td>
                        <td>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="c1">
                                <label class="custom-control-label" for="c1"> </label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="form-group">
                <button class="btn btn-sm btn-success">Salvar</button>
                <a class="btn btn-sm btn-secondary" href="#">Cancelar</a>
            </div>
        </div>

    </form>


@endsection

{{-- SCRIPTS --}}
@section('scripts')
@include('include.js')

@endsection
