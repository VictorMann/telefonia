<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminVideosController extends Controller
{
    public function index()
    {
        return view('admin.ferramentas.videos');
    }
}
