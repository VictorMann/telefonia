@extends('layouts.base')

{{-- STYLES --}}
@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
@endsection

{{-- CONTENTE --}}
@section('content')

    <div class="title-page">
        <h1>Rotas</h1>
    </div>

    <div class="row">

        <div class="col">
            <form>
                <table class="tb-base table table-sm table-striped">
                    <thead>
                        <tr>
                            <th>Rota</th>
                            <th>Apelido</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>CLI FIXO E CLI MOVEL PREMIUM</td>
                            <td style="width: 330px"><input class="form-control form-control-sm" placeholder="Descrição que será exibida para o cliente"></td>
                            <td>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="check1">
                                    <label class="custom-control-label" for="check1"></label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="form-group">
                    <button class="btn btn-sm btn-success">Salvar</button>
                    <button class="btn btn-sm btn-secondary">Cancelar</button>
                </div>
            </form>
        </div>

    </div>

@endsection

{{-- SCRIPTS --}}
@section('scripts')

@endsection
