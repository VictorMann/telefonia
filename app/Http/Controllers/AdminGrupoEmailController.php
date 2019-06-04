<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminGrupoEmailController extends Controller
{
    public function index()
    {
        return view('admin.ferramentas.grupos-email');
    }
}
