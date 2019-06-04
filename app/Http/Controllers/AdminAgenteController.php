<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAgenteController extends Controller
{
    public function index()
    {
        return view('admin.usuarios.consultar-agentes');
    }

    public function agentesPendentes()
    {
        return view('admin.usuarios.agentes-aprovacao-pend');
    }

    public function agentesContratoPendente()
    {
        return view('admin.usuarios.agentes-contract-pend');
    }

    public function agentesRejeitados()
    {
        return view('admin.usuarios.agentes-rejeitados');
    }

    public function agentesCadastroNaoPreenchido()
    {
        return view('admin.usuarios.agentes-incompletos');
    }
}
