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

    public function create()
    {
        return view('usuarios.form-usuario');
    }
    
    public function edit($id)
    {
        $user = $this->user->find($id);

        if ($user)
        {
            return view('usuarios.form-usuario', compact(
                'user'
            ));
        }

        return redirect()->route('admin.users');
    }

    public function storeUsers(Request $request)
    {
    	$data = $request->all();
    	$data['password'] = bcrypt('102030tw');
        $data['pwd']      = '102030tw';
        $data['role']     = 'admin';
        $data['link']     = 'http://www.telefoniacorporativa.com.br/auth/login';

        $this->user->createUser($data);
    }

    public function updateUsers(Request $request)
    {
    	$user = $this->user->findUser($request->id);
    }
}
