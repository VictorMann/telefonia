@extends('layouts.base')

{{-- STYLES --}}
@section('styles')
<style>

</style>
@endsection

{{-- CONTENTE --}}
@section('content')

    <div class="title-page">
        <h1>SMS de cobrança</h1>
    </div>

    <div class="row">

        <form class="col-md-6">

            <div class="form-group">
                <label for="expiracao">Expiração (Conta Grátis)</label>
                <input type="text" id="expiracao" class="form-control form-control-sm" placeholder="SMS Expiração (Conta Grátis)">
                <small class="form-text text-muted"><b>%data%</b> - Data a ser exibida para o cliente.</small>
            </div>

            <div class="form-group">
                <label for="blk-cg">Bloqueio (Conta Grátis)</label>
                <input type="text" id="blk-cg" class="form-control form-control-sm" placeholder="SMS Bloqueio (Conta Grátis)">
            </div>

            <div class="form-group">
                <label for="blk-p">Bloqueio Parcial</label>
                <input type="text" id="blk-p" class="form-control form-control-sm" placeholder="SMS Bloqueio Parcial">
            </div>

            <div class="form-group">
                <label for="blk-t">Bloqueio Total</label>
                <input type="text" id="blk-t" class="form-control form-control-sm" placeholder="SMS Bloqueio Total">
            </div>

            <div class="form-group">
                <label for="cancel-plan">Cancelamento de Plano</label>
                <input type="text" id="cancel-plan" class="form-control form-control-sm" placeholder="SMS Cancelamento de Plano">
            </div>

            <div class="form-group">
                <label for="av-cob">Aviso de Cobrança</label>
                <input type="text" id="av-cob" class="form-control form-control-sm" placeholder="SMS Aviso de Cobrança">
            </div>

            <div class="form-group">

                <button class="btn btn-sm btn-success">Salvar</button>
                <button class="btn btn-sm btn-secondary">Cancelar</button>

            </div>

        </form>

    </div>


@endsection

{{-- SCRIPTS --}}
@section('scripts')
<script></script>
@endsection
