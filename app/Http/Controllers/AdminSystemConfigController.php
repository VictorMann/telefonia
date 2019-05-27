<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSystemConfigController extends Controller
{
    public function index()
    {
        return view('ferramentas.parametrizacao');
    }
}
