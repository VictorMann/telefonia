@extends('layouts.base')

{{-- STYLES --}}
@section('styles')
<style>
.tb-totalServicos td {
    text-align: right;
    padding: .3em;
    font-weight: bold;
    color: #333;
    width: 50%;
}
.tb-totalServicos td:last-child {
    border: 2px solid #dcdcdc;
    background: #f3f3f3;
    font-size: 1.5em;
}
</style>
@endsection

{{-- CONTENTE --}}
@section('content')

    <div class="title-page">
        <h1>Migrar Cliente Pós-Pago</h1>
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

            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Tempo de contrato</label>
                    <select name="" class="form-control form-control-sm">
                        <option value="">selecionar</option>
                        <option value="">12 meses</option>
                        <option value="">24 meses</option>
                        <option value="">36 meses</option>
                    </select>
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

        <div class="row mb-5">

            <div class="col-md-1">
                <div class="form-group">
                    <label for="">Retém ISS?</label>
                    <select name="" class="form-control form-control-sm">
                        <option value="">Não</option>
                        <option value="">Sim</option>
                    </select>
                </div>
            </div>

            <div class="col-md-2 d-flex align-items-end">
                <div class="form-group">
                    <label for="">Cliente possui contrato?</label>
                    <select name="" class="form-control form-control-sm">
                        <option value="">Não</option>
                        <option value="">Sim</option>
                    </select>
                </div>
            </div>

            <div class="col-md-2 d-flex align-items-end">
                    <div class="form-group">
                        <label for="">Conta</label>
                        <select name="" class="form-control form-control-sm">
                            <option value="">PréPago</option>
                        </select>
                    </div>
                </div>

            <div class="col-md-2 d-flex align-items-end">
                <div class="form-group">
                    <input name="" class="form-control form-control-sm" placeholder="Data vencimento">
                </div>
            </div>

            <div class="col-md-2 d-flex align-items-end">
                <div class="form-group">
                    <input name="" class="form-control form-control-sm" placeholder="Senha conta Voip">
                </div>
            </div>

            <div class="col-md d-flex align-items-end">
                <div class="form-group d-flex justify-content-between align-items-center w-100">
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
                <h2>Serviços <button type="button" class="btn btn-sm btn-info ml-5" style="padding-top:.07em;padding-bottom:.07em">adicionar serviço</button></h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Serviço</label>
                    <select name="" class="form-control form-control-sm">
                        <option value="">selecionar</option>
                        <option value="">PORTABILIDADE DE NUMERO TELEFÔNICO - DID (DE 6 A 29)()</option>
                    </select>
                </div>
            </div>
            <div class="col d-flex align-items-end">
                <div class="form-group">
                    <button type="button" class="btn btn-sm btn-info">Inserir</button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input name="" class="form-control form-control-sm" placeholder="Nome do Plano">
                </div>
            </div>
        </div>

        <div class="row justify-content-end">
            <div class="col-md-5 d-flex justify-content-end">
                <table class="tb-totalServicos w-100">
                    <tbody>
                        <tr>
                            <td>Total final dos serviços:</td>
                            <td>0,00</td>
                        </tr>
                        <tr>
                            <td>Total da Fatura: (Sem consumo):</td>
                            <td>0,00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row ">
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
