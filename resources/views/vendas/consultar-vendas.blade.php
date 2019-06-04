@extends('layouts.base')

{{-- STYLES --}}
@section('styles')
<style>

</style>
@endsection

{{-- CONTENT --}}
@section('content')

    <div class="title-page">
        <h1>Consultar Vendas</h1>
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
                <input name="exibir" id="pesquisar" class="form-control form-control-sm" placeholder="Buscar venda?">
            </form>

        </div>
        <div class="col-md d-flex justify-content-end">

            <a class="btn btn-success btn-sm" href="#">
                Iniciar venda
            </a>

        </div>

    </div>


    <div class="sem-resultado">
        Não há resultados
    </div>

    <div class="row d-none">
        <div class="col-md">
            <table class="tb-base table table-sm table-striped">
                <thead>
                    <tr>
                        <th class="pt-2 pb-2">NRO.</th>
                        <th class="pt-2 pb-2">Cliente</th>
                        <th class="pt-2 pb-2">Vendedor</th>
                        <th class="pt-2 pb-2">Dt. Venda</th>
                        <th class="pt-2 pb-2">Valor</th>
                        <th class="pt-2 pb-2">Ações</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Fabiola Assunção</td>
                        <td>Rafael Costa</td>
                        <td>27/10/2017</td>
                        <td>R$ 699,00</td>
                        <td>
                            <ul class="list-unstyled d-flex lista-acao">
                                <li>
                                    <a href="#" data-toggle="popover" data-content="Editar template">
                                        <i class="fas fa-edit"></i>
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
