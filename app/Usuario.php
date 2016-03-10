<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Usuario extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    protected $table = 'usuario';
    protected $fillable = ['nome', 'login', 'senha'];
    protected $hidden = ['senha', 'remember_token'];

    public function check_user($params){
        $user = DB::table($this->table)
            ->where('login', $params['login'])
            ->first();

        if(!$user)
            return false;
        return $user;
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
