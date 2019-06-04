<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminGrupoVendaController extends Controller
{
    public function index()
    {
        return view('ferramentas.grupos-vendas');
    }
}
