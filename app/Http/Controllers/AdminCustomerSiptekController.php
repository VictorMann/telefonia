<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCustomerSiptekController extends Controller
{
    public function form()
    {
        return view('admin.usuarios.migrar-clientes');
    }

    public function formPos()
    {
        return view('admin.usuarios.migrar-clientes-pos');
    }
}
