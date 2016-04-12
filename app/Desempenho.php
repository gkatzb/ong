<?php

namespace App;

use database\CustomModel as Model;

class Desempenho extends Model
{

    protected $table = 'desempenho';
    protected $primaryKey = 'id';
    protected $fillable = ['id_usuario', 'id_subatividade', 'erros', 'acertos', 'date_ini', 'date_fim',];

    public function insertDesempenho($params){
        $insert = $this->create($params);
        return $insert;
    }

    public function getDesempenhoByAtvd($userId, $acvtId, $date_ini, $date_fim){
        $desempenho = $this->getRelAtividade($userId, $acvtId, $date_ini, $date_fim);
        return $desempenho[0];
    }

    public function getRelDesempenho($userId, $idAtividade, $date_ini, $date_fim){
        $desempenho = $this->getDesempenho($userId, $idAtividade, $date_ini, $date_fim);
        return $desempenho;
    }

    public function getDesempenhoTotal($userId, $idAtividade){
        $relGeral = $this->getRelTotal($userId, $idAtividade);
        return $relGeral[0];
    }
}
