<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminVendaController extends Controller
{
    public function index()
    {
        return view('admin.vendas.consultar-vendas');
    }
}
