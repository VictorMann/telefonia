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
        <h1>Propostas Comercial</h1>
    </div>


    <div class="row mb-2">
        <div class="col-md-12 d-flex justify-content-end">
            <form>
                <button type="button" class="btn btn-sm btn-success">Nova proposta</button>
            </form>
        </div>
    </div>

    <div class="card cx-filtros mb-4">
        <form class="card-body">
            <h2 class="card-title"><i class="fas fa-search"></i> Filtros</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="stprop">Status da proposta</label>
                        <select name="" class="form-control form-control-sm">
                            <option value="">--</option>
                            <option value="">Aprovado</option>
                            <option value="">Ativação concluída</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Nome do cliente</label>
                        <input class="form-control form-control-sm" placeholder="Ex.: Pamela Gomes">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="">Email do Cliente</label>
                        <input class="form-control form-control-sm" placeholder="Ex.: pamela.gomes@gmail.com">
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="stprop">Vendedor</label>
                        <select name="" class="form-control form-control-sm">
                            <option value="">--</option>
                            <option value="">Antonio Donizete Gomes</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="stprop">CPF/CNPJ</label>
                        <input class="form-control form-control-sm" placeholder="Ex.: 000.000.000-00">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="stprop">Nº Propost.</label>
                        <input class="form-control form-control-sm" placeholder="Ex.: 1001">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="stprop">Data Ini.</label>
                        <input class="form-control form-control-sm" placeholder="Ex.: 01/01/2019">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="stprop">Data Fim</label>
                        <input class="form-control form-control-sm" placeholder="Ex.: 15/01/2019">
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col">
                    <div class="form-group m-0">
                        <button class="btn btn-sm btn-info pl-5 pr-5">Filtrar</button>
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
                        <th class="pt-2 pb-2">#</th>
                        <th class="pt-2 pb-2">Referência</th>
                        <th class="pt-2 pb-2">Cliente</th>
                        <th class="pt-2 pb-2">Vendedor</th>
                        <th class="pt-2 pb-2">Status</th>
                        <th class="pt-2 pb-2">Dt. Proposta</th>
                        <th class="pt-2 pb-2">Valor</th>
                        <th class="pt-2 pb-2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2886</td>
                        <td>PABX VIRTUAL WHITE LABEL C/ 50 RAMAIS+portabilidade 1 numero + DP720 TELEFONE IP SEM FIO+BASE TELEFONE IP SEM FIO DP750</td>
                        <td>DIOGENES SILVA</td>
                        <td>Antonio Donizete Gomes</td>
                        <td>Pendente</td>
                        <td>01/06/2019</td>
                        <td>R$ 5.855,00</td>
                        <td>
                            <ul class="list-unstyled d-flex lista-acao">
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Baixar minuta de contratos">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Baixar proposta">
                                        <i class="fas fa-file-download"></i>
                                    </a>
                                </li>
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
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Copiar proposta">
                                        <i class="fas fa-clone"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Enviar proposta por email">
                                        <i class="fas fa-paper-plane"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Avaliar proposta">
                                        <i class="fas fa-sync-alt"></i>
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
