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
        <h1>Relatório de Comissões</h1>
    </div>

    <div class="card cx-filtros mb-4">
        <form class="card-body">
            <h2 class="card-title"><i class="fas fa-search"></i> Filtros</h2>
            <div class="row">

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

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Vendedor</label>
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


    <div class="row mt-5 mb-2">
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

    <div class="grupo-secoes">
        <section id="sintetico" class="d-none">

            <h2 class="text-center">Resumo de Comissões 01/05/2019 a 31/05/2019</h2>

            <table class="tb-base table table-sm table-striped">
                <caption>Grupo Interno</caption>
                <thead>
                    <tr>
                        <th class="pt-2 pb-2">Vendedor</th>
                        <th class="pt-2 pb-2">Receita</th>
                        <th class="pt-2 pb-2">Comissão</th>
                        <th class="pt-2 pb-2">Venda</th>
                        <th class="pt-2 pb-2">Ativação</th>
                        <th class="pt-2 pb-2">Produto</th>
                        <th class="pt-2 pb-2">Consumo</th>
                        <th class="pt-2 pb-2">Recorrencia</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Antonio Donizete Gomes</td>
                        <td>R$ 1.900,00</td>
                        <td>R$ 467,50</td>
                        <td>R$ 65,00</td>
                        <td>R$ 400,00</td>
                        <td>R$ 0,00</td>
                        <td>R$ 0,00</td>
                        <td>R$ 2,50</td>
                    </tr>
                </tbody>
            </table>

            <table class="tb-base table table-sm table-striped">
                <caption>Grupo Externo</caption>
                <thead>
                    <tr>
                        <th class="pt-2 pb-2">Vendedor</th>
                        <th class="pt-2 pb-2">Receita</th>
                        <th class="pt-2 pb-2">Comissão</th>
                        <th class="pt-2 pb-2">Venda</th>
                        <th class="pt-2 pb-2">Ativação</th>
                        <th class="pt-2 pb-2">Produto</th>
                        <th class="pt-2 pb-2">Consumo</th>
                        <th class="pt-2 pb-2">Recorrencia</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Antonio Donizete Gomes</td>
                        <td>R$ 1.900,00</td>
                        <td>R$ 467,50</td>
                        <td>R$ 65,00</td>
                        <td>R$ 400,00</td>
                        <td>R$ 0,00</td>
                        <td>R$ 0,00</td>
                        <td>R$ 2,50</td>
                    </tr>
                </tbody>
            </table>
        </section>


        <section id="analitico" class="d-none">

            <h2 class="text-center mb-4">Detalhamento de Comissões 01/05/2019 a 31/05/2019</h2>

            <table class="tb-base table table-sm table-striped">

                <thead>
                    <tr>
                        <th class="pt-2 pb-2" colspan="9"><i class="fas fa-user-tag"></i> GIANE</th>
                    </tr>
                </thead>
                <tbody>
                   <tr class="tb-title-2">
                       <td>Nro. Venda</td>
                       <td>Dt. Venda</td>
                       <td>Cliente</td>
                       <td>Receita</td>
                       <td>Venda</td>
                       <td>Ativação</td>
                       <td>Produto</td>
                       <td>Consumo</td>
                       <td>Recorrencia</td>
                   </tr>
                   <tr>
                       <td>504</td>
                       <td>23/11/2018</td>
                       <td>Tecea Cargo Transportes LTDA</td>
                       <td>R$ 290,00</td>
                       <td>R$ 0,00</td>
                       <td>R$ 43,50</td>
                       <td>R$ 0,00</td>
                       <td>R$ 0,00</td>
                       <td>R$ 0,00</td>
                   </tr>
                   <tr class="tb-tot">
                        <td colspan="3"></td>
                        <td colspan="3">Total Receita: R$ 13.910,88</td>
                        <td colspan="3">Total Comissão: R$ 1.897,61</td>
                    </tr>
                </tbody>

                <thead>
                        <tr>
                            <th class="pt-2 pb-2" colspan="9"><i class="fas fa-user-tag"></i> LEO.VENDAS</th>
                        </tr>
                    </thead>
                    <tbody>
                       <tr class="tb-title-2">
                           <td>Nro. Venda</td>
                           <td>Dt. Venda</td>
                           <td>Cliente</td>
                           <td>Receita</td>
                           <td>Venda</td>
                           <td>Ativação</td>
                           <td>Produto</td>
                           <td>Consumo</td>
                           <td>Recorrencia</td>
                       </tr>
                       <tr>
                           <td>504</td>
                           <td>23/11/2018</td>
                           <td>Tecea Cargo Transportes LTDA</td>
                           <td>R$ 290,00</td>
                           <td>R$ 0,00</td>
                           <td>R$ 43,50</td>
                           <td>R$ 0,00</td>
                           <td>R$ 0,00</td>
                           <td>R$ 0,00</td>
                       </tr>
                       <tr class="tb-tot">
                            <td colspan="3"></td>
                            <td colspan="3">Total Receita: R$ 13.910,88</td>
                            <td colspan="3">Total Comissão: R$ 1.897,61</td>
                        </tr>
                    </tbody>

            </table>
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
