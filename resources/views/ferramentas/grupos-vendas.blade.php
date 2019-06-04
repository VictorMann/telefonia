@extends('layouts.base')

{{-- STYLES --}}
@section('styles')

@endsection

{{-- CONTENTE --}}
@section('content')

    <div class="title-page">
        <h1>Grupos de Vendas</h1>
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
                <input name="exibir" id="pesquisar" class="form-control form-control-sm" placeholder="Buscar grupo de venda?">
            </form>

        </div>
        <div class="col-md d-flex justify-content-end">
            <a class="btn btn-success btn-sm" href="#">
                Novo grupo de venda
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md">
            <table class="tb-base table table-sm table-striped">
                <thead>
                    <tr>
                        <th class="pt-2 pb-2">ID</th>
                        <th class="pt-2 pb-2">Grupo de Venda</th>
                        <th class="pt-2 pb-2">Gerente</th>
                        <th class="pt-2 pb-2">Supervisor</th>
                        <th class="pt-2 pb-2">Status</th>
                        <th class="pt-2 pb-2">Dt. Cad.</th>
                        <th class="pt-2 pb-2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>TW Solutions Rafael</td>
                        <td>Rafael Costa</td>
                        <td>Denis Bertaglia</td>
                        <td><span class="status-action status-on">Ativo</span></td>
                        <td>20/05/2019</td>
                        <td>
                            <ul class="list-unstyled d-flex lista-acao">
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Editar grupo de venda">
                                        <i class="fa fa-edit"></i>
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
