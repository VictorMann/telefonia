@extends('layouts.base')

{{-- STYLES --}}
@section('styles')
<style>
.area-nav {
    border: 1px solid #DDD;
    border-top: none;
}
</style>
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
            {!! Form::open(['route' => $form->route,'method' => $form->method,'class'=> 'area-nav p-3']) !!}
            {{-- <form class="area-nav p-3" method="{{$form->method}}" action="{{route($form->route)}}"> --}}
                <input type="hidden" name="id" value="{{ $user->id ?? '' }}">
                <section id="dados-pessoais" class="d-none">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                {!! Form::label('name', 'Nome do Usuário') !!}
                                {!! Form::text('name',$user->name ?? '' , ['class' => 'form-control form-control-sm','id'=>'name','required' => 'true','placeholder' => 'Nome do usuário']) !!}
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                {!! Form::label('email', 'Email') !!}
                                {!! Form::text('email',$user->email ?? '' , ['class' => 'form-control form-control-sm','id'=>'name','required' => 'true','placeholder' => 'Endereço de email']) !!}
                            </div>
                        </div>
                    </div>
                </section>
                <section id="perfil-usuario" class="d-none">
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
                </section>

                <section id="permissoes-de-acesso" class="d-none">
                    permissoes
                </section>

                <div class="form-group border-top pt-3">
                    <button class="btn btn-sm btn-success">Salvar</button>
                    <a class="btn btn-sm btn-secondary" href="{{ route('admin.users') }}">Cancelar</a>
                </div>

            {!! Form::close() !!}
            {{-- </form> --}}

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
