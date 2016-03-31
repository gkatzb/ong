<?php

namespace App;

use Illuminate\Support\Facades\DB;
use database\CustomModel as Model;

class Subatividade extends Model
{

    protected $table = 'subatividade';
    protected $primaryKey = 'id';
    protected $fillable = ['id_atividade', 'nome', 'img', 'url'];

    public function getMateria($sbtvId){
        return $this->getMateriaBySbtvd($sbtvId);
    }

    public function getAtividade($sbtvId){
        return $this->getAtividadeBySbtvd($sbtvId);
    }
}
