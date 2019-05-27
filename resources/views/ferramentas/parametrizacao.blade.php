@extends('layouts.base')

{{-- STYLES --}}
@section('styles')
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
</style>
@endsection

{{-- CONTENTE --}}
@section('content')

    <div class="title-page">
        <h1>Configurações de Sistema</h1>
    </div>

    <div class="row">

        <div class="col">

            <ul class="nav nav-pills pillBase">
                <li class="nav-item">
                    <a class="nav-link" href="#aviso">
                        <i class="fas fa-comment-dots"></i>
                        Aviso de conta grátis
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#faturamento">
                        <i class="fas fa-dollar-sign"></i>
                        Faturamento
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tickets">
                        <i class="fas fa-ticket-alt"></i>
                        Tickets
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sms">
                        <i class="fas fa-envelope-open-text"></i>
                        SMS
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#config-usuario">
                        <i class="fas fa-street-view"></i>
                        Config. de Usuário
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#grupo-email">
                        <i class="fas fa-users"></i>
                        Grupos de email
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#comissoes">
                        <i class="fas fa-wallet"></i>
                        Comissões
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#hierarquia-de-cargas">
                        <i class="fas fa-sort-amount-down"></i>
                        Hierarquia de cargas
                    </a>
                </li>
            </ul>

        </div>

    </div>

    <form class="row mt-4 grupo-secoes">

        <section class="col d-none" id="aviso">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Aviso de expiração de plano grátis</label>
                        <select name="" class="form-control form-control-sm">
                            <option value="">1 dias</option>
                            <option value="">2 dias</option>
                            <option value="">3 dias</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Bloqueio de plano grátis</label>
                        <select name="" class="form-control form-control-sm">
                            <option value="">1 dias</option>
                            <option value="">2 dias</option>
                            <option value="">3 dias</option>
                        </select>
                    </div>
                </div>
            </div>
        </section>

        <section class="col d-none" id="faturamento">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Dias para envio de fatura antes do Vencimento</label>
                        <select name="" class="form-control form-control-sm">
                            <option value="">1 dias</option>
                            <option value="">2 dias</option>
                            <option value="">3 dias</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Dias para bloqueio parcial após o Vencimento</label>
                        <select name="" class="form-control form-control-sm">
                            <option value="">1 dias</option>
                            <option value="">2 dias</option>
                            <option value="">3 dias</option>
                        </select>
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Dias para bloqueio total após o Vencimento</label>
                        <select name="" class="form-control form-control-sm">
                            <option value="">1 dias</option>
                            <option value="">2 dias</option>
                            <option value="">3 dias</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Dias para cancelamento de conta pós após o Vencimento</label>
                        <select name="" class="form-control form-control-sm">
                            <option value="">1 dias</option>
                            <option value="">2 dias</option>
                            <option value="">3 dias</option>
                        </select>
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Dias para cancelamento de conta pré após o Vencimento</label>
                        <select name="" class="form-control form-control-sm">
                            <option value="">1 dias</option>
                            <option value="">2 dias</option>
                            <option value="">3 dias</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Dias que o número permanece em quarentena após o cancelamento da conta</label>
                        <select name="" class="form-control form-control-sm">
                            <option value="">1 dias</option>
                            <option value="">2 dias</option>
                            <option value="">3 dias</option>
                        </select>
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Prazo para cancelamento de recargas não pagas</label>
                        <select name="" class="form-control form-control-sm">
                            <option value="">1 dias</option>
                            <option value="">2 dias</option>
                            <option value="">3 dias</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Dias para bloqueio de clientes pré-pago</label>
                        <select name="" class="form-control form-control-sm">
                            <option value="">1 dias</option>
                            <option value="">2 dias</option>
                            <option value="">3 dias</option>
                        </select>
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Dias para aviso de cobrança de atraso</label>
                        <select name="" class="form-control form-control-sm">
                            <option value="">1 dias</option>
                            <option value="">2 dias</option>
                            <option value="">3 dias</option>
                        </select>
                    </div>
                </div>
            </div>
        </section>

        <section class="col d-none" id="tickets">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Fechamento automático de tickets em espera</label>
                        <select name="" class="form-control form-control-sm">
                            <option value="">1 dias</option>
                            <option value="">2 dias</option>
                            <option value="">3 dias</option>
                        </select>
                    </div>
                </div>
                <div class="col-md">
                    <label for="">Horário de Atendimento</label>
                    <div class="horario-atendimento d-flex align-items-center">
                        <span>das</span>
                        <input class="form-control form-control-sm" placeholder="Ex.: 8:00">
                        <span>às</span>
                        <input class="form-control form-control-sm" placeholder="Ex.: 12:00">
                    </div>
                </div>
            </div>
        </section>

        <section class="col d-none" id="sms">
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Emite email de aviso de sms para o grupo a seguir</label>
                        <select name="" class="form-control form-control-sm">
                            <option value="">TI Diretoria</option>
                            <option value="">TI Suporte</option>
                            <option value="">SAC</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Envia email quando SMS's restantes chegarem a</label>
                        <input class="form-control form-control-sm" placeholder="Ex.: 500">
                    </div>
                </div>

            </div>
        </section>

        <section class="col d-none" id="config-usuario">
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Usuário padrão para ações no sistema</label>
                        <select name="" class="form-control form-control-sm">
                            <option value="">System</option>
                            <option value="">Fulano</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Perfil de usuário padrão para ações no sistema</label>
                        <select name="" class="form-control form-control-sm">
                            <option value="">Representante Comercial</option>
                            <option value="">Financeiro</option>
                        </select>
                    </div>
                </div>

            </div>
        </section>

        <section class="col d-none" id="grupo-email">
            <div class="row">

                <div class="col-md">
                    <div class="form-group">
                        <label for="">Grupo de email de Análise de descontos</label>
                        <select name="" class="form-control form-control-sm">
                            <option value="">Análise de desconto</option>
                            <option value="">Portabilidade</option>
                        </select>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="">Grupo de email de Análise de Crédito</label>
                        <select name="" class="form-control form-control-sm">
                            <option value="">Análise de crédito</option>
                            <option value="">Conversão de conta teste</option>
                        </select>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="">Grupo de email de Ativação</label>
                        <select name="" class="form-control form-control-sm">
                            <option value="">TI desenvolvimento</option>
                        </select>
                    </div>
                </div>

            </div>
        </section>

        <section class="col d-none mb-3" id="comissoes">
            <div class="row">
                <div class="col-md-3">
                    <div class="nav nav-pills pillComissoes flex-column border">
                        <a class="nav-link active" href="#indicador">Indicador</a>
                        <a class="nav-link" href="#gerente-comercial">Gerente Comercial</a>
                        <a class="nav-link" href="#diretor-comercial">Diretor Comercial</a>
                        <a class="nav-link" href="#representantes">Representantes</a>
                        <a class="nav-link" href="#vendedor">Vendedor</a>
                        <a class="nav-link" href="#supervisor-comercial">Supervisor Comercial</a>
                        <a class="nav-link" href="#ceo">CEO</a>
                    </div>
                </div>
                {{-- iep --}}
                <div class="col-md">
                    <div class="secoes-comissoes border p-3">
                        <section id="indicador">

                            <div class="row">
                                <div class="col-md-12"><h2>Indicador</h2></div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">(%) Contrato: 12 meses</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="0,00">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">(%) Contrato: 24 meses</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="0,00">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">(%) Contrato: 36 meses</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="0,00">
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">(%) Cobr. Recorrente: 12 meses</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="0,00">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">(%) Cobr. Recorrente: 24 meses</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="0,00">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">(%) Cobr. Recorrente: 36 meses</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="0,00">
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">(%) Consumo: 1º Mês</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="0,00">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">(%) Produto</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="0,00">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">(%) Cobr. Única</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="0,00">
                                    </div>
                                </div>
                            </div>



                        </section>
                        <section id="gerente-comercial" class="d-none">

                            <div class="row">
                                <div class="col-md-12"><h2>Gerente Comercial</h2></div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">(%) Contrato: 12 meses</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="0,00">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">(%) Contrato: 24 meses</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="0,00">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">(%) Contrato: 36 meses</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="0,00">
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">(%) Cobr. Recorrente: 12 meses</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="0,00">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">(%) Cobr. Recorrente: 24 meses</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="0,00">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">(%) Cobr. Recorrente: 36 meses</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="0,00">
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">(%) Consumo: 1º Mês</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="0,00">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">(%) Produto</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="0,00">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">(%) Cobr. Única</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="0,00">
                                    </div>
                                </div>
                            </div>

                        </section>

                        <section id="diretor-comercial" class="d-none">
                            Diretor Comercial
                        </section>
                        <section id="representantes" class="d-none">
                            Representante
                        </section>
                        <section id="vendedor" class="d-none">
                            Vendedor
                        </section>
                        <section id="supervisor-comercial" class="d-none">
                            Supervisor Comercial
                        </section>
                        <section id="ceo" class="d-none">
                            CEO
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <section class="col d-none" id="hierarquia-de-cargas">
            <div class="row">
                <div class="col">
                    Hierarquia
                </div>
            </div>
        </section>

        <!-- quebra de linha -->
        <div class="w-100"></div>

        <div class="col">
            <div class="form-group">
                <button class="btn btn-sm btn-success">Salvar</button>
                <button class="btn btn-sm btn-secondary">Cancelar</button>
            </div>
        </div>

    </div>

@endsection

{{-- SCRIPTS --}}
@section('scripts')
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

</script>
@endsection
