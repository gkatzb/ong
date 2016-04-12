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

    public function getDesempenhoByAtvd($userId, $acvtId){
        $desempenho = $this->getRelAtividade($userId, $acvtId);
        return $desempenho[0];
    }

    public function getRelDesempenho($userId, $idAtividade){
        $desempenho = $this->getDesempenho($userId, $idAtividade);
        return $desempenho;
    }

    public function getDesempenhoTotal($userId, $idAtividade){
        $relGeral = $this->getRelTotal($userId, $idAtividade);
        return $relGeral[0];
    }
}
