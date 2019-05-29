<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Auth;
use DB;

class User extends Model
{
    protected $fillable = [

    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function createUser($form)
    {
        if($form['role'] == 'admin')
        {
            Logs::registerLog("Criou o Usuário Admin ".$form['name']);
        }
        else
        {
            Logs::registerLog("Criou o Usuário Cliente ".$form['name']);
        }

        return User::create($form);
    }

    public function getUsersAdmin()
    {
        return User::where('role', 'admin')
                    ->where('active','yes')
                    ->orderby('name','asc')
                    ->get();
    }

    public function updateUser($id, $data)
    {
        Logs::registerLog("Atualizou o Usuário " . $data['name'] . "(".$id.")");

        return User::find($id)->update($data);
    }

    public function deleteUser($id){
        Logs::registerLog("Deletou o Usuario (".$id.")");
        User::find($id)->delete();

    }
}
