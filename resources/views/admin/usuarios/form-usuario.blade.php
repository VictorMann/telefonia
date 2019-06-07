@extends('layouts.base')

{{-- STYLES --}}
@section('styles')
<style>
.permissao {
    cursor: pointer;
}
.permissao + small {
    color: #888;
    display: inline-block;
    padding-left: .3em;
}
.permissao::after {
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    font-family: "Font Awesome 5 Free";
    content: "\f106";
    border: 2px solid rgba(51, 122, 183, .7);
    color: rgba(51, 122, 183, .7);
    width: 2em;
    height: 2em;
    text-align: center;
    line-height: 1.8;
    vertical-align: middle;
    border-radius: 50%;
    margin-left: .6em;
}
.permissao.ativo::after {
    content: "\f107";

}
.mz-content {
    border-bottom: 1px dashed #DDD;
}

</style>
@endsection

{{-- CONTENTE --}}
@section('content')

    <div class="title-page">
        <h1>Colaboradores (Usuários)</h1>
    </div>

    {!! Form::open(['route' => $form->route, 'method' => $form->method, 'class'=> 'p-3']) !!}

        <div class="row mb-4">
            <div class="col">
                <h3>Dados Pessoais</h3>
                <div class="mz-content">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                {!! Form::label('name', 'Nome do Usuário') !!}
                                {!! Form::text('name', $user->name ?? '' , ['class' => 'form-control form-control-sm', 'id'=>'name', 'required' => 'required', 'placeholder' => 'Nome do usuário']) !!}
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                {!! Form::label('email', 'Email') !!}
                                {!! Form::text('email', $user->email ?? '' , ['class' => 'form-control form-control-sm','id'=>'name','required' => 'required', 'placeholder' => 'Endereço de email']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <h3>Perfil de Usuário</h3>
                <div class="mz-content">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                {!! Form::label('perfil', 'Perfil do Colaborador') !!}
                                {!! Form::select('perfil_id', $perfis,$user->perfil_id ?? null, ['class' => 'form-control form-control-sm']) !!}
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                {!! Form::label('cargo', 'Cargo') !!}
                                {!! Form::select('profile', $cargos,$user->profile ?? null, ['class' => 'form-control form-control-sm']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <h3>
                    <span class="permissao">Permissões de Acesso</span>
                    <small>(clique para exibir/esconder)</small>
                </h3>
                <div class="mz-content" style="display: none">

                    <div class="group-permission mt-3">
                        <h4 class="text-muted text-uppercase font-italic">Usuários</h4>
                        <ul class="list-unstyled d-flex flex-wrap">
                            <li class="w-25 mb-3">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="u1">
                                    <label class="custom-control-label" for="u1">Agentes (Aprovação Pendente)</label>
                                </div>
                            </li>
                            <li class="w-25 mb-3">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="u2">
                                    <label class="custom-control-label" for="u2">Aprovar Agente</label>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="group-permission mt-3">
                        <h4 class="text-muted text-uppercase font-italic">Ferramentas</h4>
                        <ul class="list-unstyled d-flex flex-wrap">
                            <li class="w-25 mb-3">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="f1">
                                    <label class="custom-control-label" for="f1">Parametrização de sistema</label>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="group-permission mt-3">
                        <h4 class="text-muted text-uppercase font-italic">Vendas</h4>
                        <ul class="list-unstyled d-flex flex-wrap">
                            <li class="w-25 mb-3">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="v1">
                                    <label class="custom-control-label" for="v1">Enviar Checklist de Ativação</label>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="form-group">
            <button class="btn btn-sm btn-success">Salvar</button>
            <a class="btn btn-sm btn-secondary" href="{{ route('admin.users') }}">Cancelar</a>
        </div>

    {!! Form::close() !!}

@endsection

{{-- SCRIPTS --}}
@section('scripts')
@include('include.js')
<script>
$('.permissao').click(function(event) {
    let mz = $(this).closest('.row').find('.mz-content');
    if (mz.is(':hidden')) {
        mz.slideDown(300);
        $(this).addClass('ativo');
    } else {
        mz.slideUp(300);
        $(this).removeClass('ativo');
    }
});
</script>


@endsection
