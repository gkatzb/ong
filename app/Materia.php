<?php

namespace App;

use database\CustomModel as Model;

class Materia extends Model
{

    protected $table = 'materia';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'img', 'url'];

    public function getMateria($id){
        return $this->getMateriaById($id);
    }

    public function getMaterias(){
        return $this->all();
    }

    public function getAtividades($materiaId){
        return $this->getAtividadesMateria($materiaId);
    }
}
