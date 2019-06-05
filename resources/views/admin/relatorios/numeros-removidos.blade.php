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
        <h1>Relatório de Números Removidos</h1>
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
        <div class="col-md-4">

            <form class="form-inline">
                <label for="pesquisar" class="mr-2">Pesquisar: </label>
                <input name="exibir" id="pesquisar" class="form-control form-control-sm" placeholder="Quem você procura?">
            </form>

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
                        <th class="pt-2 pb-2">Cliente</th>
                        <th class="pt-2 pb-2">Usuário</th>
                        <th class="pt-2 pb-2">Descrição</th>
                        <th class="pt-2 pb-2">Dt. Remoção</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>3TRF Technology Serviços de Informática LTDA - ME</td>
                        <td>Mayara</td>
                        <td>Removeu o Número (21) 2018-1603</td>
                        <td>11/12/2018 16:28:02</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


@endsection

{{-- SCRIPTS --}}
@section('scripts')

@endsection
