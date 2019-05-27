<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAgenteController extends Controller
{
    public function index()
    {
        return view('usuarios.consultar-agentes');
    }

    public function agentesPendentes()
    {
        return view('usuarios.agentes-aprovacao-pend');
    }

    public function agentesContratoPendente()
    {
        return view('usuarios.agentes-contract-pend');
    }

    public function agentesRejeitados()
    {
        return view('usuarios.agentes-rejeitados');
    }

    public function agentesCadastroNaoPreenchido()
    {
        return view('usuarios.agentes-incompletos');
    }
}
