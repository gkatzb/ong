<?php

namespace App;

use database\CustomModel as Model;

class Atividade extends Model
{

    protected $table = 'atividade';
    protected $primaryKey = 'id';
    protected $fillable = ['id_materia', 'nome', 'img', 'url'];

    public function getAtividade($id){
        return $this->getAtividadeById($id);
    }

    public function getSubatividades($atividadeId){
        return $this->getSubAtvdByAtvd($atividadeId);
    }

    public function getSubatividade($atividadeId){
        return $this->getSubAtvdById($atividadeId);
    }

    public function getMateria($atividadeId){
        return $this->getMateriaByAtvd($atividadeId);
    }
}
