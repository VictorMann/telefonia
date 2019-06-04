<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPropostaComercialController extends Controller
{
    public function index()
    {
        return view('vendas.consultar-propostas');
    }

    public function indexTipo()
    {
        return view('vendas.tipos-propostas');
    }

    public function getSolicitacoesPropostasDescontos()
    {
        return view('vendas.conceder-desconto');
    }

    public function getSolicitacoesPropostasEmAnalise()
    {
        return view('vendas.analise-credito');
    }


}
