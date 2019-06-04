@extends('layouts.base')

{{-- STYLES --}}
@section('styles')
<style>
.c-empty {
    color: #868686;
    border: none;
}
.image-profile {
    display: block;
    width: 200px;
    height: 220px;
    border: 2px dashed rgba(51, 122, 183, .7);
    background: url(/imgs/geral/avatar-profile.gif) no-repeat center;
    background-origin: content-box;
    background-size: contain;
    padding: .75em;
    cursor: pointer;
}
</style>
@endsection

{{-- CONTENTE --}}
@section('content')

    <div class="title-page">
        <h1>Meu Perfíl</h1>
    </div>

    <div class="row">
        <div class="col">
            <ul class="nav nav-pills pillBase">
                <li class="nav-item">
                    <a class="nav-link" href="#minha-conta">
                        <i class="fas fa-user-edit"></i>
                        Minha Conta
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#comissoes">
                        <i class="fas fa-piggy-bank"></i>
                        Comissões
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#configuracoes">
                        <i class="fas fa-cogs"></i>
                        Configurações
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="row grupo-secoes pt-4">
        <section class="col d-none" id="minha-conta">

            <form class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="nome-user">Nome do usuário</label>
                        <input id="nome-user" class="form-control form-control-sm" placeholder="Ex.: Marcos Gomes">
                    </div>
                    <div class="form-group">
                        <label for="cargo">Cargo</label>
                        <input id="cargo" class="form-control form-control-sm" placeholder="Ex.: Gerente Financeiro">
                    </div>
                    <div class="form-group">
                        <label for="end-email">Endereço de email</label>
                        <input id="end-email" class="form-control form-control-sm" placeholder="Ex.: beltrano@email.com">
                    </div>
                    <div class="form-group">
                        <label for="pass">Nova Senha</label>
                        <input type="password" id="pass" class="form-control form-control-sm" placeholder="***">
                    </div>
                </div>
                <div class="col">
                    <div class="image-profile" data-toggle="popover" data-content="Inserir Imagem">
                        <input type="file" name="photo" class="d-none file-imagem">
                    </div>
                    <button type="button" class="mt-2 btn btn-sm btn-outline-danger d-none" style="margin-left: 36px">remover imagem</button>
                </div>
                <div class="w-100"></div>
                <div class="col">
                    <div class="form-group">
                        <button class="btn btn-sm btn-success">Salvar</button>
                        <input type="reset" class="btn btn-sm btn-secondary" value="Cancelar">
                    </div>
                </div>
            </form>

        </section>
        <section class="col d-none" id="comissoes">
            <p class="c-empty alert alert-secondary d-none">Sem registros.</p>
            <table class="tb-base table table-sm table-striped">
                <thead>
                    <tr>
                        <th class="pt-2 pb-2">Periodo</th>
                        <th class="pt-2 pb-2">Valor</th>
                        <th class="pt-2 pb-2">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Junho de 2019</td>
                        <td>R$ 0,00</td>
                        <td>Sem valor de fatura</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section class="col d-none" id="configuracoes">
            <form class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="tempo-logado">Tempo logado</label>
                        <select id="tempo-logado" class="form-control form-control-sm">
                            <option value="">00:15</option>
                            <option value="">00:30</option>
                            <option value="">01:00</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-sm btn-success">Salvar</button>
                        <input type="reset" class="btn btn-sm btn-secondary" value="Cancelar">
                    </div>
                </div>
            </form>
        </section>
    </div>


@endsection

{{-- SCRIPTS --}}
@section('scripts')
<script>
const hash = location.hash;
let secao  = '';

if (!hash) secao = $('#minha-conta');
else secao = $(hash);

if (secao.length) {
    $('.pillBase .nav-link').filter(`[href="#${secao.attr('id')}"]`).addClass('active');
    secao.removeClass('d-none');
}

$('.pillBase .nav-link').on('click', function() {
    $('.pillBase .nav-link').removeClass('active').filter(this).addClass('active');
    $('.grupo-secoes').children('section').addClass('d-none').filter(this.hash).removeClass('d-none');
});

// POPOVER
$('.image-profile').popover({
    trigger: 'hover',
    placement: 'top'
});

// INSERE IMAGEM
$('.image-profile').click(() =>
    $('.file-imagem')
    .click(event => event.stopImmediatePropagation())
    .change(function() {
        if (this.files.item(0)) {
            geraBase64(this.files.item(0))
            .then(base64 => $(this).parent().css('backgroundImage', `url(${base64})`))
            .then(() => $('.image-profile + button').removeClass('d-none'));
        }
    })
    .trigger('click')
);
$('.image-profile + button').click(function() {
    $('.image-profile').removeAttr('style')
    .html('<input type="file" name="photo" class="d-none file-imagem">');
    $(this).addClass('d-none');
});

function geraBase64(file) {
    return new Promise((resolve, reject) => {

        let reader = new FileReader();
        reader.addEventListener('load', function(event) {
            resolve(this.result);
        }, false);

        reader.readAsDataURL(file);
    });
}

</script>
@endsection
