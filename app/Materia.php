<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Materia extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = 'materia';
    protected $fillable = ['nome'];

    public function get_id_materia($nome){
        $materia = DB::table('materia')
            ->where('nome', $nome)
            ->first();

        if(!$materia)
            return false;
        return $materia;
    }
}
