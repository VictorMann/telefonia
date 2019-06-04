@extends('layouts.base')

{{-- STYLES --}}
@section('styles')

@endsection

{{-- CONTENTE --}}
@section('content')

    <div class="title-page">
        <h1>Migrar Cliente</h1>
    </div>

    <form>
        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                    <input name="" class="form-control form-control-sm" placeholder="Nome do cliente no Siptek">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <input name="" class="form-control form-control-sm" placeholder="ID clietne Siptek">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <input name="" class="form-control form-control-sm" placeholder="Email principal">
                </div>
            </div>

            <div class="col-md-2 d-flex justify-content-end">
                <div>
                    <button type="button" class="btn btn-sm btn-info">Adicionar email</button>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-3">
                <div class="form-group">
                    <input name="" class="form-control form-control-sm" placeholder="CPF/CNPJ">
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input name="" class="form-control form-control-sm" placeholder="RG/IE">
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input name="" class="form-control form-control-sm" placeholder="Telefone">
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input name="" class="form-control form-control-sm" placeholder="Celular">
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-3">
                <div class="form-group">
                    <input name="" class="form-control form-control-sm" placeholder="CEP">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <input name="" class="form-control form-control-sm" placeholder="Endereço">
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input name="" class="form-control form-control-sm" placeholder="Número">
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                    <input name="" class="form-control form-control-sm" placeholder="Bairro">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <input name="" class="form-control form-control-sm" placeholder="Cidade">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <input name="" class="form-control form-control-sm" placeholder="Estado">
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-1">
                <button type="button" class="btn btn-sm btn-info">Add</button>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <input name="" class="form-control form-control-sm" placeholder="Plano">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <input name="" class="form-control form-control-sm" placeholder="Data vencimento">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <input name="" class="form-control form-control-sm" placeholder="Senha conta Voip">
                </div>
            </div>

            <div class="col-md">
                <div class="form-group d-flex justify-content-between align-items-center">
                    <label style="margin-bottom: 0px;font-size: .9em;">Gerar NF antes do pagamento:</label>
                    <select name="" class="form-control form-control-sm w-25">
                        <option value="">Não</option>
                        <option value="">Sim</option>
                    </select>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col">
                <div class="form-group border-top pt-3 mt-2">
                    <button type="submit" class="btn btn-sm btn-success">Salvar</button>
                    <button type="button" class="btn btn-sm btn-secondary">Cancelar</button>
                </div>
            </div>
        </div>

    </form>




@endsection

{{-- SCRIPTS --}}
@section('scripts')

@endsection
