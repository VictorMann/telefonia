<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('usuarios.colaboradores');
    }

    public function listarPerfis()
    {
        return view('usuarios.perfil-usuario');
    }


}
