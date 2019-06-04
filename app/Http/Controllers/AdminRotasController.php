<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminRotasController extends Controller
{
    public function index()
    {
        return view('admin.ferramentas.rotas');
    }
}
