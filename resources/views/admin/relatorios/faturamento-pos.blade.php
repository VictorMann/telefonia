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
        <h1>Relatório de Faturamento Pós-Pago</h1>
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

                <div class="col align-self-end">
                    <div class="form-group">
                        <button class="btn btn-sm btn-info pl-5 pr-5">Gerar Relatório</button>
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
                        <th class="pt-2 pb-2">Solicitado em</th>
                        <th class="pt-2 pb-2">Solicitado por</th>
                        <th class="pt-2 pb-2">Rel./Período</th>
                        <th class="pt-2 pb-2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>14/06/2019 14:41</td>
                        <td>Rafael Costa</td>
                        <td>Relatório de clientes Pós Pagos (2018-05) - 25/06/2019 00:00:00</td>
                        <td>
                            <ul class="list-unstyled d-flex lista-acao">
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Baixar relatório gerado em 00/00/0000 00:00 !">
                                        <i class="fas fa-file-excel"></i>
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
