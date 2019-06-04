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
        <h1>Conceder Desconto em Proposta</h1>
    </div>


    <div class="row mb-2">
        <div class="col-md d-flex justify-content-end">
            <div>
                <a class="btn btn-success btn-sm" href="#">
                    Nova proposta
                </a>
            </div>
        </div>
    </div>


    <div class="sem-resultado">
        Não há resultados
    </div>

    <div class="row d-none">
        <div class="col-md">
            <table class="tb-base table table-sm table-striped">
                <thead>
                    <tr>
                        <th class="pt-2 pb-2">#</th>
                        <th class="pt-2 pb-2">Referência</th>
                        <th class="pt-2 pb-2">Cliente</th>
                        <th class="pt-2 pb-2">Vendedor</th>
                        <th class="pt-2 pb-2">Status</th>
                        <th class="pt-2 pb-2">Dt. proposta</th>
                        <th class="pt-2 pb-2">Valor</th>
                        <th class="pt-2 pb-2">Ações</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Serviços</td>
                        <td>Douglas Pedroso</td>
                        <td>Antonio</td>
                        <td><span class="status-action status-on">Ativo</span></td>
                        <td>27/10/2017</td>
                        <td>R$ 1.000,00</td>
                        <td>
                            <ul class="list-unstyled d-flex lista-acao">
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Editar proposta">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Excluir proposta">
                                        <i class="fas fa-times"></i>
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
