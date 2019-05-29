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
    Route::get('dashboard', 'HomeController@index')->name('dashboard');


    // Usuários
    Route::get('usuarios', 'AdminUserController@index')->name('admin.users');
    Route::get('perfis-de-usuarios', 'AdminUserController@listarPerfis')->name('admin.users.perfis');

    Route::get('clientes', 'AdminCustomerController@index')->name('admin.customers');
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




});




