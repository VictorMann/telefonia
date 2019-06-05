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
        <h1>Relatório Financeiro</h1>
    </div>

    <div class="card cx-filtros mb-4">
        <form class="card-body">
            <h2 class="card-title"><i class="fas fa-search"></i> Filtros</h2>
            <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="stprop">Nome</label>
                        <input class="form-control form-control-sm" placeholder="Ex.: Pedro Shar">
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

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Status</label>
                        <select name="" class="form-control form-control-sm">
                            <option value="">Cancelada</option>
                            <option value="">Paga</option>
                            <option value="">Pendente</option>
                            <option value="">Vencida</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Forma de pagamento</label>
                        <select name="" class="form-control form-control-sm">
                            <option value="">Boleto</option>
                            <option value="">Cartão de Credito</option>
                        </select>
                    </div>
                </div>


                <div class="w-100"></div>


                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Datas</label>
                        <select name="" class="form-control form-control-sm">
                            <option value="">Gerdas em</option>
                            <option value="">Vencidas em</option>
                        </select>
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

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Nota Fiscal</label>
                        <select class="form-control form-control-sm">
                            <option value="">Gerada</option>
                            <option value="">Não Gerada</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-2 align-self-end">
                    <div class="form-group custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1">Total</label>
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
                        <th class="pt-2 pb-2">Fatura</th>
                        <th class="pt-2 pb-2">Cliente</th>
                        <th class="pt-2 pb-2">Vendedor</th>
                        <th class="pt-2 pb-2">Tipo</th>
                        <th class="pt-2 pb-2">Dt. Ger.</th>
                        <th class="pt-2 pb-2">Dt. Pgto.</th>
                        <th class="pt-2 pb-2">Dt. Venc.</th>
                        <th class="pt-2 pb-2">Valor</th>
                        <th class="pt-2 pb-2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>17596</td>
                        <td>Rdl Cargo LTDA</td>
                        <td>Venda Online</td>
                        <td>Pós Pago</td>
                        <td>01/06/2019</td>
                        <td>Pagamento Pendente</td>
                        <td>28/06/2019</td>
                        <td>R$ 370,00</td>
                        <td>
                            <ul class="list-unstyled d-flex lista-acao">
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Visualizar os detalhes do cliente">
                                        <i class="fas fa-user"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Mostrar Itens">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Boleto do cliente">
                                        <i class="fas fa-sticky-note"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Cancelar fatura">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Enviar email para o cliente">
                                        <i class="fas fa-paper-plane"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Gerar 2ª via da fatura para o cliente">
                                        <i class="fas fa-copy"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Baixar fatura do cliente">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Gerar sua nota fiscal. A nota gera será enviada para o email do cliente <EMAIL_CLIENTE@EMAIL.COM>">
                                        <i class="fas fa-file-export"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Histórico de todos os boletos gerados para essa fatura">
                                        <i class="fas fa-history"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Obter mais info da fatura">
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
