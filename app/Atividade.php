<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Materia;

class Atividade extends Model
{

    protected $table = 'atividade';
    protected $primaryKey = 'id';
    protected $fillable = ['id_materia', 'nome', 'img'];

    public function getAtividadeById($id){
        $atividade = $this->find($id);
        return $atividade;
    }

    public function getSubAtividades($atividadeId){
        $response = DB::table($this->table)
        ->join('subatividade', 'atividade.id', '=', 'subatividade.id_atividade')
        ->join('materia', 'atividade.id_materia', '=', 'materia.id')
        ->where('atividade.id', '=', $atividadeId)
        ->get();
        return $response;
    }

    public function getSubAtividadeById($atividadeId){
        $response = DB::table($this->table)
        ->join('subatividade', 'atividade.id', '=', 'subatividade.id_atividade')
        ->join('materia', 'atividade.id_materia', '=', 'materia.id')
        ->where('subatividade.id', '=', $atividadeId)
        ->select('subatividade.id')
        ->get();
        return $response;
    }

    public function subatividades($atividadeId){
        $subatividades = DB::table($this->table)
            ->leftJoin('subatividade', 'subatividade.id_atividade', '=', 'atividade.id')
            ->where('atividade.id', '=', $atividadeId)
            ->get();
        return $subatividades;
    }

    public function insertDesempenho($params){
        $insert = DB::table('desempenho')->insert($params);
        return $insert;
    }

    public function getUserDesempenho($userId, $idSubatividade){
        $desempenho = DB::table('desempenho')
            ->join('usuario', 'desempenho.id_usuario', '=', 'usuario.id')
            ->join('subatividade', 'desempenho.id_subatividade', '=', 'subatividade.id')
            ->where('usuario.id', '=', $userId)
            ->where('desempenho.id_subatividade', '=', $idSubatividade)
            ->get();
        return $desempenho;
    }
}
