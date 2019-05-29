@extends('layouts.base')

{{-- STYLES --}}
@section('styles')

@endsection

{{-- CONTENTE --}}
@section('content')

    <div class="title-page">
        <h1>Colaboradores (Usuários)</h1>
    </div>

    <div class="row">
        <div class="col">

            <ul class="navBase nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="#dados-pessoais">Dados Pessoais</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#perfil-usuario">Perfil de Usuário</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#permissoes-de-acesso">Permissões de Acesso</a>
                </li>
            </ul>

            <form class="area-nav p-3">

                <section id="dados-pessoais" class="d-none">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" id="nome" class="form-control form-control-sm" placeholder="Nome do usuário">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control form-control-sm" placeholder="Endereço de email">
                            </div>
                        </div>
                    </div>
                </section>

                <section id="perfil-usuario" class="d-none">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="nome">Perfil do Colaborador</label>
                                <select name="" class="form-control form-control-sm">
                                    <option value="">Administrador</option>
                                    <option value="">Vendedor Interno</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="email">Cargo</label>
                                <select name="" class="form-control form-control-sm">
                                    <option value="">Indicador</option>
                                    <option value="">Vendedor</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="permissoes-de-acesso" class="d-none">
                    permissoes
                </section>

                <div class="form-group border-top pt-3">
                    <button class="btn btn-sm btn-success">Salvar</button>
                    <button class="btn btn-sm btn-secondary">Cancelar</button>
                </div>

            </form>

        </div>
    </div>


@endsection

{{-- SCRIPTS --}}
@section('scripts')
<script>

let hash = location.hash;
if (!hash) hash = '#dados-pessoais';

$('.navBase a').filter(`[href*="${hash}"]`).addClass('active');
$(hash).removeClass('d-none');

$('.navBase').on('click', 'a', function(event) {
    $('.navBase a').removeClass('active').filter(this).addClass('active');
    $('.area-nav > section').addClass('d-none').filter(this.hash).removeClass('d-none');
});


</script>
@endsection
