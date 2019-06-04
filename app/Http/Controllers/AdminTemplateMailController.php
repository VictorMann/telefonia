<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminTemplateMailController extends Controller
{
    public function index()
    {
        return view('admin.ferramentas.template-email');
    }
}
