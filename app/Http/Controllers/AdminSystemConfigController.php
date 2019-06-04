<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSystemConfigController extends Controller
{
    public function index()
    {
        return view('ferramentas.parametrizacao');
    }

    public function msgAlertIndex()
    {
        return view('ferramentas.msg-email-cobranca');
    }

    public function smsAlertIndex()
    {
        return view('ferramentas.msg-sms-cobranca');
    }

    public function smsWhatsapp()
    {
        return view('ferramentas.msg-sms-whatsapp');
    }

    public function mailingClientes()
    {
        return view('ferramentas.mailing-clientes');
    }

    public function termsIndex()
    {
        return view('ferramentas.terms');
    }

    public function contratosIndex()
    {
        return view('vendas.editar-contrato');
    }
}
