<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSaleController extends Controller
{
    public function form()
    {
        return view('admin.vendas.gera-venda-plano');
    }
}
