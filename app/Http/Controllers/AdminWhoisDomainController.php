<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminWhoisDomainController extends Controller
{
    public function index()
    {
        return view('ferramentas.whois');
    }
}
