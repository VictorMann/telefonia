<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use App\Library\TelefoniaApi;

class AdminUserController extends Controller
{
	public function __construct (User $user)
	{
		$this->user = $user;
        $this->telefoniaApi = new TelefoniaApi();
    }

    public function index()
    {
        $users  = $this->telefoniaApi->get('user');

        return view('admin.usuarios.colaboradores', compact(
            'users'
        ));
    }

    public function profile()
    {
        return view('admin.usuarios.config-usuario');
    }

    public function listarPerfis()
    {
        return view('admin.usuarios.perfil-usuario');
    }

    public function craetePerfil()
    {
        return view('admin.usuarios.perfil-usuario-form');
    }

    public function create()
    {
        $form = (object) [
            'route'  => 'admin.users.save',
            'method' => 'POST'
        ];

        $perfis = [
            '' => '::Selecione o Perfil do Colaborador::',
            1  => 'Administrador',
            2  => 'Suporte',
            3  => 'Financeiro',
            4  => 'Comercial'
        ];

        $cargos = [
            '' => '::Selecione o Cargo do Colaborador',
            1  => 'Presidente',
            2  => 'Gerente Comercial'
        ];

        return view('admin.usuarios.form-usuario', compact(
            'perfis',
            'cargos',
            'form'
        ));
    }

    public function save(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt('102030tw');
        $data['pwd']      = '102030tw';
        $data['role']     = 'admin';
        $data['link']     = 'http://www.telefoniacorporativa.com.br/auth/login';

        $api = $this->telefoniaApi->create('user',$data);

        // -- Faz tratativa de erro --
        if(isset($api->errors))
            return redirect()->route('admin.users')->with('message_ERROR', $api->message);

        return redirect()->route('admin.users')->with('message_SUCCESS', 'Usuario cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $form = (object) ['route'  => 'admin.users.update','method' => 'PUT'];

        $user = $this->telefoniaApi->get('user/'.$id);

        $perfis = ['' => '::Selecione o Perfil do Colaborador::',
            1 => 'Administrador',
            2 => 'Suporte',
            3 => 'Financeiro',
            4 => 'Comercial'
        ];

        $cargos  = ['' => '::Selecione o Cargo do Colaborador',
            1 => 'Presidente',
            2 => 'Gerente Comercial'
        ];


        if ($user)
        {
            return view('admin.usuarios.form-usuario', compact(
                'user','form','perfis','cargos'
            ));
        }

        return redirect()->route('admin.users');
    }

    public function update(Request $request)
    {
        $data = $request->all();

        $api = $this->telefoniaApi->put('user/'.$request->id,$data);

        // -- Faz tratativa de erro --
        if(isset($api->errors))
            return redirect()->route('admin.users')->with('message_ERROR', $api->message);

        return redirect()->route('admin.users')->with('message_SUCCESS', 'Usuario editado com sucesso!');
    }

    public function remove($id)
    {
        $api = $this->telefoniaApi->delete('user/'.$id);

        // -- Faz tratativa de erro --
        if(isset($api->errors))
            return redirect()->route('admin.users')->with('message_ERROR', $api->message);

        return redirect()->route('admin.users')->with('message_SUCCESS', 'Usuario excluido com sucesso!');
    }

    public function editarDepartamento($id)
    {
        return view('admin.usuarios.departamento');
    }

    public function editarGrupoEmail($id)
    {
        return view('admin.usuarios.grupo-emails');
    }
}
