<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDepartamentoController extends Controller
{
    public function index()
    {
        return view('admin.ferramentas.departamentos');
    }
}
