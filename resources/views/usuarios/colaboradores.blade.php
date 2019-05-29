@extends('layouts.base')

{{-- STYLES --}}
@section('styles')
<style>
body {
    font-size: .9em;
}
.lista-acao li {
    padding: 0 .3em;
}
.lista-acao a {
    color: #337ab7;
}
.tb-base th,
.tb-base td {
    vertical-align: middle;
}
.tb-base th:last-child {
    width: 140px;
}
</style>
@endsection

{{-- CONTENTE --}}
@section('content')

    <div class="title-page">
        <h1>Colaboradores (Usuários)</h1>
    </div>

    <div class="row mb-2">

        <div class="col-md">

            <form class="form-inline">
                <span class="mr-2">Exibir: </span>
                <select name="exibir" id="exibir" class="form-control form-control-sm">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                </select>
            </form>

        </div>
        <div class="col-md">

            <form class="form-inline">
                <label for="pesquisar" class="mr-2">Pesquisar: </label>
                <input name="exibir" id="pesquisar" class="form-control form-control-sm" placeholder="Quem você procura?">
            </form>

        </div>
        <div class="col-md d-flex justify-content-end">

            <a class="btn btn-success btn-sm" href="{{ route('admin.users.create') }}">
                Novo Usuário
            </a>

        </div>

    </div>

    <div class="row">
        <div class="col-md">
            <table class="tb-base table table-sm table-striped">
                <thead>
                    <tr>
                        <th class="pt-2 pb-2">Nome</th>
                        <th class="pt-2 pb-2">Email</th>
                        <th class="pt-2 pb-2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Adriana Ozorio</td>
                        <td>adriana.ozorio@gmail.com</td>
                        <td>
                            <ul class="list-unstyled d-flex lista-acao">
                                <li><a href="#" data-toggle="popover" data-content="Editar usuário"><i class="fa fa-edit"></i></a></li>
                                <li><a href="#" data-toggle="popover" data-content="Remover usuário"><i class="fa fa-times"></i></a></li>
                                <li><a href="#" data-toggle="popover" data-content="Vincular usuário a um ou mais departamentos"><i class="fa fa-building"></i></a></li>
                                <li><a href="#" data-toggle="popover" data-content="Vincular usuário a um ou mais grupos de email"><i class="fa fa-group"></i></a></li>
                                <li><a href="#" data-toggle="popover" data-content="Consultar comissão"><i class="fa fa-list-alt"></i></a></li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


@endsection

{{-- SCRIPTS --}}
@section('scripts')
<script>

    // popover
    $('.lista-acao a').popover({
        trigger: 'hover',
        placement: 'top'
    });



</script>
@endsection
