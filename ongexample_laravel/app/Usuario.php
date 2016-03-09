<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $fillable = ['nome', 'login', 'senha'];
    protected $hidden = ['senha', 'remember_token'];

    public function get_user($params){
        $users = DB::table($this->table)
        ->where('login', $params['login'])
        ->where('senha', $params['password'])
        ->first();

        if (count($users) > 0)
            return true;
        return false;
    }

    public function check_user($params){
        $users = DB::table($this->table)
        ->where('login', $params['login'])
        ->first();

        if (count($users) > 0)
            return true;
        return false;
    }

    public function insert_user($params){
        $checkUser = $this->check_user($params);

        if(!$checkUser){
            DB::table('usuario')->insert(
                ['login' => $params['login'], 'senha' => $params['password'], 'id_perfil' => 1]
            );
            return true;
        } else {
            return false;
        }
    }
}
