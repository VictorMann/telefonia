@extends('layouts.base')

{{-- STYLES --}}
@section('styles')
<style>
.cx-filtros {
    border: 2px solid rgba(51, 122, 183, .5);
}
.card-title .fa-search {
    color: rgba(51, 122, 183, .7);
    font-size: .9em;
}
.tb-base thead th:nth-child(1n+5),
.tb-base tbody td:nth-child(1n+5) {
    white-space: nowrap;
}
</style>
@endsection

{{-- CONTENTE --}}
@section('content')

    <div class="title-page">
        <h1>Template de Propostas</h1>
    </div>


    <div class="row mb-2">

            <div class="col-md">

                <form class="form-inline">
                    <span class="mr-2">Exibir: </span>
                    <select name="exibir" id="exibir" class="form-control form-control-sm">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select>
                </form>

            </div>
            <div class="col-md">

                <form class="form-inline">
                    <label for="pesquisar" class="mr-2">Pesquisar: </label>
                    <input name="exibir" id="pesquisar" class="form-control form-control-sm" placeholder="Buscar template?">
                </form>

            </div>
            <div class="col-md d-flex justify-content-end">

                <a class="btn btn-success btn-sm" href="#">
                    Novo template
                </a>

            </div>

        </div>


    {{-- <div class="sem-resultado">
        Não há resultados
    </div> --}}

    <div class="row">
        <div class="col-md">
            <table class="tb-base table table-sm table-striped">
                <thead>
                    <tr>
                        <th class="pt-2 pb-2">#</th>
                        <th class="pt-2 pb-2">Template</th>
                        <th class="pt-2 pb-2">Status</th>
                        <th class="pt-2 pb-2">Dt. Cadastro</th>
                        <th class="pt-2 pb-2">Ações</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Proposta padrão PABX</td>
                        <td><span class="status-action status-on">Ativo</span></td>
                        <td>27/10/2017</td>
                        <td>
                            <ul class="list-unstyled d-flex lista-acao">
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Editar template">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>


@endsection

{{-- SCRIPTS --}}
@section('scripts')

@endsection
