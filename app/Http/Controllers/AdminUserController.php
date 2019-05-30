<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminUserController extends Controller
{
	public function __construct (User $user)
	{
		$this->user = $user;
    }

    public function index()
    {
        $users  = $this->user->getUsersAdmin();

        return view('usuarios.colaboradores', compact(
            'users'
        ));
    }

    public function listarPerfis()
    {
        return view('usuarios.perfil-usuario');
    }

    public function craetePerfil()
    {
        return view('usuarios.perfil-usuario-form');
    }

    public function create()
    {

        $form = (object) ['route'  => 'admin.users.save','method' => 'POST'];

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

        return view('usuarios.form-usuario', compact(
            'perfis','cargos','form'
        ));
    }
    
    public function save(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt('102030tw');
        $data['pwd']      = '102030tw';
        $data['role']     = 'admin';
        $data['link']     = 'http://www.telefoniacorporativa.com.br/auth/login';

        $this->user->createUser($data);

        return redirect()->route('admin.users')->with('message_SUCCESS', 'Usuario cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $form = (object) ['route'  => 'admin.users.update','method' => 'PUT'];
        $user = $this->user->find($id);

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
            return view('usuarios.form-usuario', compact(
                'user','form','perfis','cargos'
            ));
        }

        return redirect()->route('admin.users');
    }

    public function update(Request $request)
    {
        $data = $request->all();

        $this->user->updateUser($request->id,$data);
        
        return redirect()->route('admin.users')->with('message_SUCCESS', 'Usuario editado com sucesso!');
    }

    public function remove ($id) 
    {
        $this->user->find($id)->delete();
        return redirect()->route('admin.users')->with('message_SUCCESS', 'Usuario excluido com sucesso!');
    }
}
