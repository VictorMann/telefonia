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
        <h1>Relatório de Faturamento Pré-Pago</h1>
    </div>

    <div class="card cx-filtros mb-4">
        <form class="card-body">
            <h2 class="card-title"><i class="fas fa-search"></i> Filtros</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Período</label>
                        <select class="form-control form-control-sm">
                            <option value="">05/2019</option>
                        </select>
                    </div>
                </div>

                <div class="w-100"></div>
                <div class="col">
                    <div class="form-group">
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
                        <th class="pt-2 pb-2">Cliente</th>
                        <th class="pt-2 pb-2">Núm. Ativação</th>
                        <th class="pt-2 pb-2">Serviços</th>
                        <th class="pt-2 pb-2">Equipamentos</th>
                        <th class="pt-2 pb-2">Dt. Faturamento</th>
                        <th class="pt-2 pb-2">Dt. Vencimento</th>
                        <th class="pt-2 pb-2">Status</th>
                        <th class="pt-2 pb-2">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bio Life Saúde - Corretora de planos de saúde</td>
                        <td>R$ 0,00</td>
                        <td>R$ 999,00</td>
                        <td>R$ 0,00</td>
                        <td>20/05/2019</td>
                        <td>02/06/2019</td>
                        <td>Fatura Enviada</td>
                        <td>R$ 999,00</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>


@endsection

{{-- SCRIPTS --}}
@section('scripts')

@endsection
