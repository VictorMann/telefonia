<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBlacklistDomainController extends Controller
{
    public function index()
    {
        return view('admin.ferramentas.blacklist');
    }
}
