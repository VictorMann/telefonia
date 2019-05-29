@extends('layouts.base')

{{-- STYLES --}}
@section('styles')
<style>
#mensagem { height: 240px; }
</style>
@endsection

{{-- CONTENTE --}}
@section('content')

    <div class="title-page">
        <h1>Configurações de Mensagem do Whatsapp</h1>
    </div>

    <div class="row">

        <form class="col-md-6">

            <div class="form-group">
                <label for="mensagem">Mensagem</label>
                <textarea id="mensagem" class="form-control form-control-sm" placeholder="Aqui vai a mensagem a ser enviada ao cliente"></textarea>
                <small class="form-text text-muted"><b>%link_proposta%</b> = link da proposta</small>
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

@endsection
