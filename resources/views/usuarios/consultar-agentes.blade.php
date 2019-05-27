@extends('layouts.base')

{{-- STYLES --}}
@section('styles')
<style>
.tb-totalServicos td {
    text-align: right;
    padding: .3em;
    font-weight: bold;
    color: #333;
    width: 50%;
}
.tb-totalServicos td:last-child {
    border: 2px solid #dcdcdc;
    background: #f3f3f3;
    font-size: 1.5em;
}
</style>
@endsection

{{-- CONTENTE --}}
@section('content')

    <div class="title-page">
        <h1>Agentes Autorizados</h1>
    </div>

    <div class="row mb-2">

        <div class="col-md-4">

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
                <input name="exibir" id="pesquisar" class="form-control form-control-sm" placeholder="Procurar Agente?">
            </form>

        </div>
    </div>

    <div class="row">
        <div class="col-md">
            <table class="tb-base table table-sm table-striped">
                <thead>
                    <tr>
                        <th class="pt-2 pb-2">Agente/Empresa</th>
                        <th class="pt-2 pb-2">Email</th>
                        <th class="pt-2 pb-2">Tel/Cel</th>
                        <th class="pt-2 pb-2">Área de atuação</th>
                        <th class="pt-2 pb-2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ACIDI</td>
                        <td>acidi@twsolutions.com.br</td>
                        <td>1936214114 / 19998900565</td>
                        <td>São Paulo - SP</td>
                        <td>
                            <ul class="list-unstyled d-flex lista-acao">
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Logar na conta do agente">
                                        <i class="fas fa-home"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Consultar comissão">
                                        <i class="fas fa-list-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Visualizar mais informações do agente autorizado">
                                        <i class="fas fa-search"></i>
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
