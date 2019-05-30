<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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


}
