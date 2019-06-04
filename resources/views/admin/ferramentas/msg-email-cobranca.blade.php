@extends('layouts.base')

{{-- STYLES --}}
@section('styles')
{{-- <link rel="stylesheet" href="{{ asset('plugins/bootstrap-summernote/summernote.css') }}"> --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
<style>
.area-msg {
    border: 1px solid #DDD;
    border-top: none;
}
.area {
    min-height: 200px;
}
</style>
@endsection

{{-- CONTENTE --}}
@section('content')

    <div class="title-page">
        <h1>Configurações de Mensagens do Sistema</h1>
    </div>

    <div class="row">
        <div class="col">

            <ul class="navBase nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="#mensagens-financeiro">
                        Mensagens Financeiro
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#mensagens-proposta-comercial">
                        Mensagens Proposta Comercial
                    </a>
                </li>
            </ul>

            <div class="area-msg p-3 d-none" id="mensagens-financeiro">

                <ul class="nav nav-pills pillBase mb-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="javascript:;">
                            Expiração (conta grátis)
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:;">
                            Bloqueio (conta grátis)
                        </a>
                    </li>
                </ul>

                <form>
                    <!-- summernote -->
                    <textarea class="summernote"></textarea>
                </form>

            </div>

            <div class="area-msg p-3 d-none" id="mensagens-proposta-comercial">

                <ul class="nav nav-pills pillBase mb-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="javascript:;">
                            FollowUp Cliente
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:;">
                            Validade Cliente
                        </a>
                    </li>
                </ul>

                <form>
                    <!-- summernote -->
                    <textarea class="summernote"></textarea>
                </form>

            </div>
        </div>
    </div>
@endsection

{{-- SCRIPTS --}}
@section('scripts')
{{-- <script src="{{ asset('plugins/bootstrap-summernote/summernote.min.js') }}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
<script>

let hash = location.hash;
if (!hash) hash = '#mensagens-financeiro';
$('.navBase a').removeClass('active').filter(`[href*="${hash}"]`).addClass('active');
$(hash).removeClass('d-none');


$('.navBase').on('click', 'a', function(event) {
    $('.navBase a').removeClass('active').filter(this).addClass('active');
    $('.area-msg').addClass('d-none').filter(this.hash).removeClass('d-none');
});

$('.area-msg').on('click', 'a', function(event) {

    $(this).closest('.area-msg').find('a').removeClass('active').filter(this).addClass('active');

});

$('.summernote').summernote({
    placeholder: 'Hello bootstrap 4',
    tabsize: 2,
    height: 100
});


</script>
@endsection
