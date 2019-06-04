<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPesquisaSatisfacaoController extends Controller
{
    public function index()
    {
        return view('ferramentas.pesquisa-satisfacao');
    }
}
