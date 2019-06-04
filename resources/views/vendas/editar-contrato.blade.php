@extends('layouts.base')

{{-- STYLES --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('plugins/bootstrap-summernote/summernote.css') }}">
<style>
.horario-atendimento > * {
    margin-right: 1em;
}
.horario-atendimento span {
    font-weight: bold;
}
.horario-atendimento input {
    width: 80px;
}
.secoes-comissoes,
.pillComissoes {
    border-width: 2px !important;
}
.pillComissoes {
    padding: .4em;
}
.pillComissoes a:hover {
    background-color: #f1f1f1;
}

.lista-keywords {
    padding-left: 10px;
    font-size: 0.85em;
    color: #5d5d5d;
}
</style>
@endsection

{{-- CONTENTE --}}
@section('content')

    <div class="title-page">
        <h1>Contratos</h1>
    </div>

    <div class="row">

        <div class="col">

            <ul class="nav nav-pills pillBase">
                <li class="nav-item mb-2"><a class="nav-link" href="#pre-pago">Pré-pago</a></li>
                <li class="nav-item mb-2"><a class="nav-link" href="#pos-pago">Pós-pago</a></li>
                <li class="nav-item mb-2"><a class="nav-link" href="#poc">Poc</a></li>
                <li class="nav-item mb-2"><a class="nav-link" href="#comodato">Comodato</a></li>
                <li class="nav-item mb-2"><a class="nav-link" href="#aditivo">Aditivo</a></li>
                <li class="nav-item mb-2"><a class="nav-link" href="#try-and-by">Try and By</a></li>
                <li class="nav-item mb-2"><a class="nav-link" href="#indicadores">Indicadores</a></li>
                <li class="nav-item mb-2"><a class="nav-link" href="#representantes">Representantes</a></li>
                <li class="nav-item mb-2"><a class="nav-link" href="#pre-pago-migracao">Pré-pago migração</a></li>
                <li class="nav-item mb-2"><a class="nav-link" href="#pos-pago-migracao">Pós-pago migração</a></li>
                <li class="nav-item mb-2"><a class="nav-link" href="#mudanca-de-plano">Mudança de plano</a></li>
            </ul>

        </div>

    </div>

    <form class="row mt-4">

        <section class="col">
            <div class="row">
                <div class="col">
                    <!-- summernote -->
                    <textarea class="summernote"></textarea>
                </div>
                <div class="col-md-3">
                    {{-- <ul class="lista-keywords">
                        <li><span class="font-weight-bold">%num_proposta%</span> - Número da proposta</li>
                    </ul> --}}
                    <ul class="lista-keywords">
                        <li>%num_proposta% = Exibe o número da Proposta Comercial ou do pedido de compra(site).</li>
                        <li>%data_proposta% = Exibe a data da proposta comercial ou da compra.</li>
                        <li>%name% = Exibe o nome de identificação do cliente.</li>
                        <li>%cidade% = Exibe a cidade de origem do contrato.</li>
                        <li>%dia% = Exibe o dia de geração do contrato.</li>
                        <li>%mes_extenso% = Exibe o mês de geração do contrato.</li>
                        <li>%ano% = Exibe o ano de geração do contrato.</li>
                        <li>%periodo_contrato% = Exibe o período de duração do contrato.</li>
                        <li>%cpf_cnpj% = Exibe CPF/CNPJ do cliente utilizado na assinatura do contrato.</li>
                        <li>%rg_ie% = Exibe R.G./ IE do cliente utilizado na assinatura do contrato.</li>
                        <li>%nome_cliente% = Exibe Nome/Razão Social do cliente utilizado na assinatura do contrato.</li>
                        <li>%end_logradouro% = Exibe o logradouro cadastrado pelo cliente para contato no contrato.</li>
                        <li>%end_numero% = Exibe o número do endereço cadastrado pelo cliente para contato no contrato.</li>
                        <li>%end_bairro% = Exibe o bairro cadastrado pelo cliente para contato no contrato.</li>
                        <li>%end_cidade% = Exibe a cidade cadastrada pelo cliente para contato no contrato.</li>
                        <li>%end_estado% = Exibe o estado cadastrado pelo cliente para contato no contrato.</li>
                        <li>%email% = Exibe o email para contato no contrato.</li>
                        <li>%phone% = Exibe o telefone para contato no contrato.</li>
                        <li>%mobile% = Exibe o telefone celular para contato no contrato.</li>
                        <li>%produtos% = Exibe os produtos contratados pelo cliente.</li>
                        <li>%servicos% = Exibe os servicos contratados pelo cliente.</li>
                        <li>%comodatos% = Exibe os produtosem comodato com os serviços do cliente.</li>
                    </ul>

                </div>
            </div>
        </section>

        <div class="w-100"></div>

        <div class="col">
            <div class="form-group mt-3 pt-3 border-top">
                <button class="btn btn-sm btn-success">Salvar</button>
                <button class="btn btn-sm btn-secondary">Cancelar</button>
            </div>
        </div>

    </div>

@endsection

{{-- SCRIPTS --}}
@section('scripts')
<script src="{{ asset('plugins/bootstrap-summernote/summernote.min.js') }}"></script>
<script>
const hash = location.hash;
let secao  = '';

if (!hash) secao = $('#aviso');
else secao = $(hash);

if (secao.length) {
    $('.pillBase .nav-link').filter(`[href="#${secao.attr('id')}"]`).addClass('active');
    secao.removeClass('d-none');
}

$('.pillBase .nav-link').on('click', function() {
    $('.pillBase .nav-link').removeClass('active').filter(this).addClass('active');
    $('.grupo-secoes').children('section').addClass('d-none').filter(this.hash).removeClass('d-none');
});

$('.pillComissoes a').on('click', function(event) {
    event.preventDefault();
    $(this).addClass('active').siblings('.nav-link').removeClass('active');
    $('.secoes-comissoes').children('section').addClass('d-none').filter(this.hash).removeClass('d-none');
});


$('.summernote').summernote({
    placeholder: 'Corpo do template...',
    tabsize: 2,
    height: 300
});

</script>
@endsection
