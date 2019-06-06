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
        <h1>Vendas</h1>
    </div>

    <div class="card cx-filtros mb-4">
        <form class="card-body">
            <h2 class="card-title"><i class="fas fa-search"></i> Filtros</h2>
            <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Venda Tipo</label>
                        <select class="form-control form-control-sm">
                            <option value="">Todos</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Venda Status</label>
                        <select class="form-control form-control-sm">
                            <option value="">Pago</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Vendedor</label>
                        <select class="form-control form-control-sm">
                            <option value="">Todos</option>
                        </select>
                    </div>
                </div>

                <div class="w-100"></div>

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

    <div class="sem-resultado">
        Não há vendas correspondentes aos filtros nesse período!
    </div>


    <div class="row mt-5 mb-2 d-none">
        <div class="col">
            <ul class="nav nav-pills pillBase">
                <li class="nav-item">
                    <a class="nav-link" href="#sintetico">
                        <i class="fas fa-list"></i>
                        Sintético
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#analitico">
                        <i class="fas fa-chart-line"></i>
                        Análitico
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="grupo-secoes d-none">
        <section id="sintetico" class="d-none">

            <h2 class="text-center">Sintético</h2>

        </section>


        <section id="analitico" class="d-none">

            <h2 class="text-center mb-4">Análitico</h2>

        </section>
    </div>




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
