<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPabxController extends Controller
{
    public function index()
    {
        return view('ferramentas.pabx');
    }
}
