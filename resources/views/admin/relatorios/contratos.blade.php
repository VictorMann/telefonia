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
caption {
    caption-side: top;
    font-size: 1.1em;
    font-weight: bold;
    text-align: center;
}
.tb-title-2,
.tb-tot {
    font-weight: bold;
}
.tb-tot {
    background: #e1ffbe !important;
}
.pillBase {
    background: repeating-linear-gradient(45deg, rgba(222, 222, 222, 0.2), rgba(222, 222, 222, 0.2) 5px, white 5px, white 10px);
    background-size: calc(100% - 17%) 100%;
    background-repeat: no-repeat;
    background-position-x: 217px;
}
</style>
@endsection

{{-- CONTENTE --}}
@section('content')

    <div class="title-page">
        <h1>Contratos</h1>
    </div>

    <div class="card cx-filtros mb-4">
        <form class="card-body">
            <h2 class="card-title"><i class="fas fa-search"></i> Filtros</h2>
            <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Nome do Cliente</label>
                        <input class="form-control form-control-sm" placeholder="Ex.: Beatriz Brandão">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input class="form-control form-control-sm" placeholder="Ex.: beartriz.brandao@gmail.com">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Dt. Ini</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Ex.: 01/01/2019">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Dt. Fim</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Ex.: 15/01/2019">
                    </div>
                </div>

                <div class="w-100"></div>

                <div class="col-md-4">
                        <div class="form-group">
                            <label for="">CPF/CNPJ</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Ex.: 000.000.000-00">
                        </div>
                    </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Tipo</label>
                        <select class="form-control form-control-sm">
                            <option value="">Todos</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Tipo de Conta</label>
                        <select class="form-control form-control-sm">
                            <option value="">Todos</option>
                        </select>
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

    <table class="tb-base table table-sm table-striped">
        <thead>
            <tr>
                <th class="pt-2 pb-2">Principal</th>
                <th class="pt-2 pb-2">Usuário</th>
                <th class="pt-2 pb-2">Email</th>
                <th class="pt-2 pb-2">Dt. do contrato</th>
                <th class="pt-2 pb-2">Conta</th>
                <th class="pt-2 pb-2">Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Sim</td>
                <td>IPE Investimentos</td>
                <td>contantoemail@email.com</td>
                <td>--</td>
                <td>Pré-Pago</td>
                <td>
                    <ul class="list-unstyled d-flex lista-acao">
                        <li>
                            <a href="#" data-toggle="popover" data-content="Visualizar mais informações">
                                <i class="fas fa-search"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="popover" data-content="Gerar e enviar contrato para o cliente">
                                <i class="fas fa-paper-plane"></i>
                            </a>
                        </li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>

@endsection

{{-- SCRIPTS --}}
@section('scripts')
<script>
const hash = location.hash;
let secao  = '';

if (!hash) secao = $('#sintetico');
else secao = $(hash);

if (secao.length) {
    $('.pillBase .nav-link').filter(`[href="#${secao.attr('id')}"]`).addClass('active');
    secao.removeClass('d-none');
}

$('.pillBase .nav-link').on('click', function() {
    $('.pillBase .nav-link').removeClass('active').filter(this).addClass('active');
    $('.grupo-secoes').children('section').addClass('d-none').filter(this.hash).removeClass('d-none');
});
</script>
@endsection
