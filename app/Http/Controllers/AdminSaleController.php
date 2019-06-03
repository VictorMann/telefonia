<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSaleController extends Controller
{
    public function form()
    {
        return view('vendas.gera-venda-plano');
    }
}
