<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminGrupoEmailController extends Controller
{
    public function index()
    {
        return view('ferramentas.grupos-email');
    }
}
