@extends('layouts.base')

{{-- STYLES --}}
@section('styles')

@endsection

{{-- CONTENTE --}}
@section('content')

    <div class="title-page">
        <h1>Cliente</h1>
    </div>

    {{ Form::open() }}
        <div class="row">
            <div class="col-md-4 form-group">
                <label for="nome">Nome do cliente</label>
                {{ Form::text('', '', ['class' => 'form-control form-control-sm', 'placeholder' => 'Ex.: Marcos Douglas']) }}
            </div>
            <div class="col-md-4 form-group">
                <label for="nome">Contato Responsável</label>
                {{ Form::text('', '', ['class' => 'form-control form-control-sm', 'placeholder' => '(99) 9999-9999']) }}
            </div>
            <div class="col-md-4 form-group">
                <label for="nome">Endereço de Email</label>
                {{ Form::text('', '', ['class' => 'form-control form-control-sm', 'placeholder' => 'email@email.com']) }}
            </div>

            <div class="w-100"></div>
            <div class="col-md-3 form-group">
                <label for="nome">Gerente de Contas</label>
                {{ Form::select('NOME', ['Antonio Donizete'], '', ['class' => 'form-control form-control-sm']) }}
            </div>
            <div class="col-md-3 form-group">
                <label for="nome">Acesso</label>
                {{ Form::select('NOME', ['Liberado'], '', ['class' => 'form-control form-control-sm']) }}
            </div>

            <div class="w-100"></div>
            <div class="col-md-3 form-group">
                <label for="nome">CPF/CNPJ</label>
                {{ Form::text('', '', ['class' => 'form-control form-control-sm', 'placeholder' => '']) }}
            </div>
            <div class="col-md-3 form-group">
                <label for="nome">RG/IE</label>
                {{ Form::text('', '', ['class' => 'form-control form-control-sm', 'placeholder' => '']) }}
            </div>
            <div class="col-md-3 form-group">
                <label for="nome">Telefone</label>
                {{ Form::text('', '', ['class' => 'form-control form-control-sm', 'placeholder' => '']) }}
            </div>
            <div class="col-md-2 form-group">
                <label for="nome">Celular</label>
                {{ Form::text('', '', ['class' => 'form-control form-control-sm', 'placeholder' => '']) }}
            </div>
            <div class="col-md-1 form-group">
                <label for="nome">Tem ISS?</label>
                {{ Form::select('NOME', ['Sim', 'Não'], '', ['class' => 'form-control form-control-sm']) }}
            </div>
            <div class="w-100"></div>
            <div class="col-md-2 form-group">
                <label for="nome">CEP</label>
                {{ Form::text('', '', ['class' => 'form-control form-control-sm', 'placeholder' => '0000-000']) }}
            </div>
            <div class="col-md-5 form-group">
                <label for="nome">Endereço</label>
                {{ Form::text('', '', ['class' => 'form-control form-control-sm', 'placeholder' => 'Ex.: Rua Cardoso M.']) }}
            </div>
            <div class="col-md-2 form-group">
                <label for="nome">Número</label>
                {{ Form::text('', '', ['class' => 'form-control form-control-sm', 'placeholder' => 'Ex.: 101']) }}
            </div>
            <div class="col-md-3 form-group">
                <label for="nome">Complemento</label>
                {{ Form::text('', '', ['class' => 'form-control form-control-sm', 'placeholder' => 'Ex.: Bloco 2 Apto 51']) }}
            </div>

            <div class="w-100"></div>
            <div class="col-md-3 form-group">
                <label for="nome">Bairro</label>
                {{ Form::text('', '', ['class' => 'form-control form-control-sm', 'placeholder' => '']) }}
            </div>
            <div class="col-md-3 form-group">
                <label for="nome">Cidade</label>
                {{ Form::text('', '', ['class' => 'form-control form-control-sm', 'placeholder' => 'Ex.: São Paulo']) }}
            </div>
            <div class="col-md-2 form-group">
                <label for="nome">Estado</label>
                {{ Form::select('NOME', ['São Paulo', 'Rio de Janeiro'], '', ['class' => 'form-control form-control-sm']) }}
            </div>

            <div class="w-100"></div>
            <div class="col-md-2 form-group">
                <label for="nome">Multa de Recisão</label>
                {{ Form::text('', '', ['class' => 'form-control form-control-sm', 'placeholder' => '']) }}
            </div>
            <div class="col-md-3 form-group">
                <label for="nome">Gerar NF antes do pagamento?</label>
                {{ Form::select('NOME', ['Sim', 'Não'], '', ['class' => 'form-control form-control-sm']) }}
            </div>
        </div>

        <div class="form-group border-top pt-2 mt-2">
            <button class="btn btn-sm btn-success">Salvar</button>
            <a class="btn btn-sm btn-secondary" href="#">Cancelar</a>
        </div>

    {{ Form::close() }}


@endsection

{{-- SCRIPTS --}}
@section('scripts')

@endsection
