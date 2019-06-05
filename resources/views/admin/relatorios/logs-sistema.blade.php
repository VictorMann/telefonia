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
/* .lista-export * {
    vertical-align: middle;
} */
.lista-export li:first-child {
    margin-right: 10px;
}
.lista-export li:not(:first-child) {
    margin-right: 5px;
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
        <h1>Logs do Sistema</h1>
    </div>

    <div class="card cx-filtros mb-4">
        <form class="card-body">
            <h2 class="card-title"><i class="fas fa-search"></i> Filtros</h2>
            <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="stprop">Usuário</label>
                        <select class="form-control form-control-sm">
                            <option value="">Andre Silva</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="stprop">Ação</label>
                        <input class="form-control form-control-sm" placeholder="Ex.: ?">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Dt. Ini</label>
                        <input class="form-control form-control-sm" placeholder="Ex.: 01/01/2019">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Dt. Fim</label>
                        <input class="form-control form-control-sm" placeholder="Ex.: 27/01/2019">
                    </div>
                </div>

                <div class="w-100"></div>

                <div class="col">
                    <div class="form-group m-0">
                        <button class="btn btn-sm btn-info pl-5 pr-5">Filtrar</button>

                        <div class="lista-export d-inline-block ml-5">
                            <ul class="list-unstyled d-flex align-items-center">
                                <li>Exportar:</li>
                                <li>
                                    <a href="javascript:;" class="btn btn-sm btn-outline-secondary" data-toggle="popover" data-content="Exportar Excel">
                                        <i class="fas fa-file-excel"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </form>
    </div>

    {{-- <div class="sem-resultado">
        Não há resultados
    </div> --}}

    <div class="row">
        <div class="col-md">
            <table class="tb-base table table-sm table-striped">
                <thead>
                    <tr>
                        <th class="pt-2 pb-2">Usuário</th>
                        <th class="pt-2 pb-2">Ação</th>
                        <th class="pt-2 pb-2">Data</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>System</td>
                        <td>A NF 1922 teve seu status alterado para Issued</td>
                        <td>05/06/2019 10:30</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


@endsection

{{-- SCRIPTS --}}
@section('scripts')

@endsection
