@extends('layouts.base')

{{-- STYLES --}}
@section('styles')
    <link href="{{ asset('/plugins/bootstrap-sweetalert/sweetalert.css') }}" rel="stylesheet">
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

    @if ($users)
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
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <ul class="list-unstyled d-flex lista-acao">
                                        <li>
                                            <a href="{{ route('admin.users.edit',['id' => $user->id]) }}" data-toggle="popover" data-content="Editar usuário {{$user->name}}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="popover" data-content="Remover usuário {{$user->name}}" onclick="removeRegistro('usuarios-remover/','{{ $user->id }}')">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.users.departamento', [$user->id]) }}" data-toggle="popover" data-content="Vincular usuário a um ou mais departamentos">
                                                <i class="fa fa-building"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.users.grupos.email', [$user->id]) }}" data-toggle="popover" data-content="Vincular usuário a um ou mais grupos de email">
                                                <i class="fas fa-users"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-toggle="popover" data-content="Consultar comissão">
                                                <i class="fa fa-list-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <button class="btn btn-primary" data-toggle="modal" data-target="#modal1">MODAL</button>

        <!-- Modal -->
        <div class="modal fade" id="modal1" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="sem-resultado">
            Não há resultados
        </div>
    @endif


@endsection

{{-- SCRIPTS --}}
@section('scripts')
@include('include.js')
<script>

    // popover
    $('.lista-acao a').popover({
        trigger: 'hover',
        placement: 'top'
    });



</script>

@endsection
