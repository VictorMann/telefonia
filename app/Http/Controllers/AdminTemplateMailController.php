<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminTemplateMailController extends Controller
{
    public function index()
    {
        return view('ferramentas.template-email');
    }
}
