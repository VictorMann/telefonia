<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPropostaComercialController extends Controller
{
    public function index()
    {
        return view('admin.vendas.consultar-propostas');
    }

    public function indexTipo()
    {
        return view('admin.vendas.tipos-propostas');
    }

    public function getSolicitacoesPropostasDescontos()
    {
        return view('admin.vendas.conceder-desconto');
    }

    public function getSolicitacoesPropostasEmAnalise()
    {
        return view('admin.vendas.analise-credito');
    }


}
