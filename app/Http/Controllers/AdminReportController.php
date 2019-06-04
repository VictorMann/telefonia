<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminReportController extends Controller
{
    public function reportCancelCustomers()
    {
        return view('admin.relatorios.cancelamentos');
    }

    public function reportCustomers()
    {
        return view('admin.relatorios.clientes');
    }

}
