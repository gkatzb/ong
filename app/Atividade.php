<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Atividade extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = 'atividade';
    protected $fillable = ['nome'];
    protected $idMateria;

    public function get_atividade($params){
        $materia = new Materia();
        $this->idMateria = $materia->get_id_materia($params['nome_materia']);

        $atividade = DB::table($this->table)
            ->where('id_materia', $this->idMateria)
            ->first();

        if(!$atividade)
            return false;
        return $atividade;
    }
}
