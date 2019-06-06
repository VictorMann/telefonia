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

    public function reportFinancial()
    {
        return view('admin.relatorios.financeiro');
    }

    public function reportLogs()
    {
        return view('admin.relatorios.logs-sistema');
    }

    public function numbers()
    {
        return view('admin.relatorios.numeros-removidos');
    }

    public function reportVendasEquipamentos()
    {
        return view('admin.relatorios.vendas-equipamentos');
    }

    public function getComissoes()
    {
        return view('admin.relatorios.comissoes');
    }

    public function credits()
    {
        return view('admin.relatorios.recargas-colaborador');
    }

    public function creditsByCustomers()
    {
        return view('admin.relatorios.recargas-clientes');
    }

    public function sales()
    {
        return view('admin.relatorios.vendas');
    }

    public function reportFaturamentoPos()
    {
        return view('admin.relatorios.faturamento-pos');
    }

    public function reportFaturamentoPre()
    {
        return view('admin.relatorios.faturamento-pre');
    }

    public function contratos()
    {
        return view('admin.relatorios.contratos');
    }

    public function pendenciasDeAtivacaoFinanceiro()
    {
        return view('admin.relatorios.ativacao-pend-pag');
    }

    public function pendenciasDeAtivacaoContrato()
    {
        return view('admin.relatorios.ativacao-pend-contrato');
    }

}
