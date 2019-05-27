@extends('layouts.base')

{{-- STYLES --}}
@section('styles')

@endsection

{{-- CONTENTE --}}
@section('content')

    <div class="title-page">
        <h1>Clientes</h1>
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
                <input name="exibir" id="pesquisar" class="form-control form-control-sm" placeholder="Perfil desejado?">
            </form>

        </div>
        <div class="col-md d-flex justify-content-end">

            <button class="btn btn-success btn-sm">
                Novo Cliente
            </button>

        </div>

    </div>

    <div class="row">
        <div class="col-md">
            <table class="tb-base table table-sm table-striped">
                <thead>
                    <tr>
                        <th class="pt-2 pb-2">Nome</th>
                        <th class="pt-2 pb-2">Email</th>
                        <th class="pt-2 pb-2">Plano</th>
                        <th class="pt-2 pb-2">Status</th>
                        <th class="pt-2 pb-2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Fulano Ciclano Beltrano</td>
                        <td>fulano@email.com</td>
                        <td>Grátis</td>
                        <td><span class="status-action status-off">Conta Cancelada</span></td>
                        <td>
                            <ul class="list-unstyled d-flex lista-acao">
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Mais informações do cliente">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Gerenciar contas VOIP">
                                        <i class="fas fa-phone"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Login na conta do cliente">
                                        <i class="fas fa-home"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Desbloquear conta VOIP">
                                        <i class="fas fa-lock-open"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Alterar saldo e créditos">
                                        <i class="fas fa-dollar-sign"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Editar conta">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="popover" title="Atenção!" data-content="Essa ação exclui permanentemente a conta">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Adicionar anotações do cliente">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </a>
                                </li>
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

@endsection
