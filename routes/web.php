<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
    // return view('welcome');
});

Auth::routes();


Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function() {

    // Logout
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');


    // Dashboard
    Route::get('dashboard', 'HomeController@index')->name('admin.dashboard');


    // Perfil usuário
    Route::get('meu-perfil', 'AdminUserController@profile')->name('admin.users.perfil');


    // Usuários
    Route::get('usuarios', 'AdminUserController@index')->name('admin.users');
    Route::get('usuarios/create', 'AdminUserController@create')->name('admin.users.create');
    Route::post('usuarios/novo', 'AdminUserController@save')->name('admin.users.save');

    Route::put('usuarios/update', 'AdminUserController@update')->name('admin.users.update');
    Route::get('usuarios-remover/{id}', 'AdminUserController@remove')->name('admin.users.remove');
    Route::get('usuarios/{id}', 'AdminUserController@edit')->name('admin.users.edit');

    Route::get('perfis-de-usuarios', 'AdminUserController@listarPerfis')->name('admin.users.perfis');
    Route::get('perfis-de-usuarios/create', 'AdminUserController@craetePerfil')->name('admin.users.perfis.create');

    Route::get('clientes', 'AdminCustomerController@index')->name('admin.customers');
    Route::get('clientes/create', 'AdminCustomerController@createCliente')->name('admin.customers.create');

    Route::get('clientes-siptek', 'AdminCustomerSiptekController@form')->name('admin.customers.create.siptek');
    Route::get('clientes-siptek-pos', 'AdminCustomerSiptekController@formPos')->name('admin.customers.create.siptek.pos');

    Route::get('agentes', 'AdminAgenteController@index')->name('admin.agentes');
    Route::get('agentes-pendentes', 'AdminAgenteController@agentesPendentes')->name('admin.agentes.pendentes');
    Route::get('agentes-contrato-pendente', 'AdminAgenteController@agentesContratoPendente')->name('admin.agentes.contrato.pendente');
    Route::get('agentes-contrato-rejeitado', 'AdminAgenteController@agentesRejeitados')->name('admin.agentes.contrato.rejeitado');
    Route::get('agentes-cadastro-nao-preenchido', 'AdminAgenteController@agentesCadastroNaoPreenchido')->name('admin.agentes.contrato.cadastro.incompleto');


    // Ferramentas
    Route::get('config', 'AdminSystemConfigController@index')->name('admin.config');
    Route::get('mensagens', 'AdminSystemConfigController@msgAlertIndex')->name('admin.config.mensagens');
    Route::get('sms', 'AdminSystemConfigController@smsAlertIndex')->name('admin.config.sms');
    Route::get('sms-whatsapp', 'AdminSystemConfigController@smsWhatsapp')->name('admin.config.whatsapp');
    Route::get('mailing-clientes', 'AdminSystemConfigController@mailingClientes')->name('admin.mailing.clientes');

    Route::get('terms', 'AdminSystemConfigController@termsIndex')->name('admin.config.terms');
    Route::get('rotas', 'AdminRotasController@index')->name('admin.rotas');
    Route::get('blacklist', 'AdminBlacklistDomainController@index')->name('admin.blacklists');
    Route::get('departamentos', 'AdminDepartamentoController@index')->name('admin.departamentos');
    Route::get('pabx', 'AdminPabxController@index')->name('admin.pabx');
    Route::get('videos', 'AdminVideosController@index')->name('admin.videos');
    Route::get('template-de-email', 'AdminTemplateMailController@index')->name('admin.mail.template');

    Route::get('grupos-de-email', 'AdminGrupoEmailController@index')->name('admin.grupos.email');
    Route::get('grupos-de-vendas', 'AdminGrupoVendaController@index')->name('admin.grupos.vendas');
    Route::get('pesquisa-satisfacao', 'AdminPesquisaSatisfacaoController@index')->name('admin.satisfacao');
    Route::get('whois', 'AdminWhoisDomainController@index')->name('admin.whois');


    // Vendas
    Route::get('propostas', 'AdminPropostaComercialController@index')->name('admin.propostas');
    Route::get('tipo-de-proposta', 'AdminPropostaComercialController@indexTipo')->name('admin.propostas.tipo');
    Route::get('get-propostas/desconto', 'AdminPropostaComercialController@getSolicitacoesPropostasDescontos')->name('admin.propostas.desconto');
    Route::get('get-propostas/analise-credito', 'AdminPropostaComercialController@getSolicitacoesPropostasEmAnalise')->name('admin.propostas.analise.credito');
    Route::get('layout-de-proposta', 'AdminTemplateController@index')->name('admin.propostas.layout');

    Route::get('vendas', 'AdminVendaController@index')->name('admin.vendas');
    Route::get('nova-venda', 'AdminSaleController@form')->name('admin.sales.create');
    Route::get('contratos', 'AdminSystemConfigController@contratosIndex')->name('admin.config.contratos');


    // Relatorios
    Route::get('relatorio-clientes-cancelados', 'AdminReportController@reportCancelCustomers')->name('admin.reports.cancel.customer');
    Route::get('relatorio-clientes', 'AdminReportController@reportCustomers')->name('admin.reports.customers');

});




