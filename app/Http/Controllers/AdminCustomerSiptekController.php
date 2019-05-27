<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCustomerSiptekController extends Controller
{
    public function form()
    {
        return view('usuarios.migrar-clientes');
    }

    public function formPos()
    {
        return view('usuarios.migrar-clientes-pos');
    }
}
