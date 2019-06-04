@extends('layouts.base')

{{-- STYLES --}}
@section('styles')
<style>
.cx-portability .row:nth-child(2n) {
    background: #f7f7f7;
}
.cx-portability .form-group {
    margin-bottom: .6em;
}
</style>
@endsection

{{-- CONTENT --}}
@section('content')

    <div class="title-page">
        <h1>Gerar Venda de Plano</h1>
    </div>

    <div class="row">

        <div class="col-md-1 d-flex align-items-center">
            <div><button class="btn btn-sm btn-info">add</button>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="">Cliente</label>
                <select name="" class="form-control form-control-sm">
                    <option value="">Andre Silva</option>
                </select>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control form-control-sm" readonly>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="">Telefone</label>
                <input type="text" class="form-control form-control-sm" readonly>
            </div>
        </div>

    </div>

    <div class="row mb-5">

        <div class="col-md-1 d-flex align-items-center">
            <div><button class="btn btn-sm btn-info">add</button>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="">Selecione o plano</label>
                <select name="" class="form-control form-control-sm">
                    <option value="">TW 250</option>
                </select>
            </div>
        </div>

    </div>

    <div class="row mb-5">
        <div class="col">
            <h4>Números Virtuais</h4>
            <div class="row">
                <div class="col-md-4">
                    <select name="" class="form-control form-control-sm">
                        <option value="">11</option>
                    </select>
                </div>
                <div class="col-md-6 ">
                    <select name="" class="form-control form-control-sm">
                        <option value="">(99) 99999-9999</option>
                    </select>
                </div>
                <div class="col-md-2 ">
                    <button class="btn btn-sm btn-outline-danger btn-block">X</button>
                </div>
            </div>
        </div>

        <div class="col d-flex justify-content-start align-items-end">
            <div class="form-group ml-5 m-0">
                <button class="btn btn-sm btn-success"><i class="fas fa-plus" style="font-size:.9em"></i> Adicionar número</button>
            </div>
        </div>

    </div>


    <div class="row">
        <div class="col cx-portability">

            <h4>Portabilidade</h4>

            <div class="row pt-2">
                <div class="col-md-2">
                    <div class="form-group">
                        <select class="form-control form-control-sm">
                            <option value="">DDD</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="Número">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="Operador origem">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="Razão Social">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="CPF/CNPJ">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="CEP">
                    </div>
                </div>

                <div class="w-100"></div>

                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="Endereço">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="Nro. Residencial">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="Complemento">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="Bairro">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="Cidade">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <select class="form-control form-control-sm">
                            <option value="">Estado</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-md-2">
                    <div class="form-group">
                        <select class="form-control form-control-sm">
                            <option value="">DDD</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="Número">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="Operador origem">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="Razão Social">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="CPF/CNPJ">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="CEP">
                    </div>
                </div>

                <div class="w-100"></div>

                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="Endereço">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="Nro. Residencial">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="Complemento">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="Bairro">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="Cidade">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <select class="form-control form-control-sm">
                            <option value="">Estado</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-md-2">
                    <div class="form-group">
                        <select class="form-control form-control-sm">
                            <option value="">DDD</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="Número">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="Operador origem">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="Razão Social">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="CPF/CNPJ">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="CEP">
                    </div>
                </div>

                <div class="w-100"></div>

                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="Endereço">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="Nro. Residencial">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="Complemento">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="Bairro">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input class="form-control form-control-sm" placeholder="Cidade">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <select class="form-control form-control-sm">
                            <option value="">Estado</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="row">
        <div class="col">
            <div class="form-group border-top mt-2 pt-3">
                <button class="btn btn-sm btn-success">Salvar</button>
                <button class="btn btn-sm btn-secondary">Cancelar</button>
            </div>
        </div>
    </div>





@endsection

{{-- SCRIPTS --}}
@section('scripts')

@endsection
