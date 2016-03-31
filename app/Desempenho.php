<?php

namespace App;

use database\CustomModel as Model;

class Desempenho extends Model
{

    protected $table = 'desempenho';
    protected $primaryKey = 'id';
    protected $fillable = ['id_usuario', 'id_subatividade', 'erros', 'acertos',];

    public function insertDesempenho($params){
        $insert = $this->create($params);
        return $insert;
    }

    public function getUserDesempenho($userId, $idSubatividade){
        $desempenho = $this->getDesempenho($userId, $idSubatividade);
        
        return $desempenho;
    }
}
