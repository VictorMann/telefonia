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
        <h1>Relatório de Clientes</h1>
    </div>

    <div class="card cx-filtros mb-4">
        <form class="card-body">
            <h2 class="card-title"><i class="fas fa-search"></i> Filtros</h2>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Status da Conta</label>
                        <select name="" class="form-control form-control-sm">
                            <option value="">Todos</option>
                            <option value="">Bloqueio parcial</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Tipo de Conta</label>
                        <select name="" class="form-control form-control-sm">
                            <option value="">Pré-Paga</option>
                            <option value="">Pós-Paga</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="stprop">Nome</label>
                        <input class="form-control form-control-sm" placeholder="Ex.: Pedro Shar">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="stprop">Email</label>
                        <input class="form-control form-control-sm" placeholder="Ex.: predro.shar@gmail.com">
                    </div>
                </div>

                <div class="w-100"></div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="stprop">CPF/CNPJ</label>
                        <input class="form-control form-control-sm" placeholder="Ex.: 000.000.000-00">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="stprop">Dt. Ini</label>
                        <input class="form-control form-control-sm" placeholder="Ex.: 01/01/2019">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="stprop">Dt. Fim</label>
                        <input class="form-control form-control-sm" placeholder="Ex.: 15/01/2019">
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
                        <th class="pt-2 pb-2">Nome</th>
                        <th class="pt-2 pb-2">Email</th>
                        <th class="pt-2 pb-2">Vendedor</th>
                        <th class="pt-2 pb-2">Status</th>
                        <th class="pt-2 pb-2">Dt. Cad.</th>
                        <th class="pt-2 pb-2">Plano</th>
                        <th class="pt-2 pb-2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Diogo Gomes</td>
                        <td>diogo.gomes@gmail.com</td>
                        <td>Diogenes</td>
                        <td>Conta Cancelada</td>
                        <td>01/06/2019</td>
                        <td>TW 250</td>
                        <td>
                            <ul class="list-unstyled d-flex lista-acao">
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Visualizar os detalhes do cliente">
                                        <i class="fas fa-user"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Visualizar os detalhes do cancelamento">
                                        <i class="fas fa-user-slash"></i>
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
