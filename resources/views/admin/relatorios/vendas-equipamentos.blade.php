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
        <h1>Vendas de Equipamentos</h1>
    </div>

    <div class="card cx-filtros mb-4">
        <form class="card-body">
            <h2 class="card-title"><i class="fas fa-search"></i> Filtros</h2>
            <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Cliente</label>
                        <select class="form-control form-control-sm">
                            <option value="">Mauricio Martins</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Cod. venda</label>
                        <input class="form-control form-control-sm" placeholder="Ex.: 102">
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
                        <th class="pt-2 pb-2">Cod. Venda</th>
                        <th class="pt-2 pb-2">Cliente</th>
                        <th class="pt-2 pb-2">Vendedor</th>
                        <th class="pt-2 pb-2">Valor</th>
                        <th class="pt-2 pb-2">Dt. Venda</th>
                        <th class="pt-2 pb-2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>102</td>
                        <td>Belinutri Distribuidora de Medicamentos LTDA</td>
                        <td>Lazaro Jose Sampaio Junior 76372782634</td>
                        <td>R$ 6.260,00</td>
                        <td>28/06/2019</td>
                        <td>
                            <ul class="list-unstyled d-flex lista-acao">
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Mostrar itens">
                                        <i class="fas fa-eye"></i>
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
