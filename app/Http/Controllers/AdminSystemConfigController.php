<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSystemConfigController extends Controller
{
    public function index()
    {
        return view('admin.ferramentas.parametrizacao');
    }

    public function msgAlertIndex()
    {
        return view('admin.ferramentas.msg-email-cobranca');
    }

    public function smsAlertIndex()
    {
        return view('admin.ferramentas.msg-sms-cobranca');
    }

    public function smsWhatsapp()
    {
        return view('admin.ferramentas.msg-sms-whatsapp');
    }

    public function mailingClientes()
    {
        return view('admin.ferramentas.mailing-clientes');
    }

    public function termsIndex()
    {
        return view('admin.ferramentas.terms');
    }

    public function contratosIndex()
    {
        return view('admin.vendas.editar-contrato');
    }
}
