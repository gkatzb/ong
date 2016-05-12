<?php
/**
 * Created by Gabriela Katz
 */

namespace database;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Card;
use Carbon\Carbon;

class CustomModel extends Model
{
    protected function getDesempenho($userId, $atividadeId, $date_ini, $date_fim){
        $date_ini = date_create_from_format('Y-m-d H:i:s', $date_ini);
        $date_ini = date_format($date_ini, 'Y-m-d H:i:s');
        $date_fim = date_create_from_format('Y-m-d H:i:s', $date_fim);
        $date_fim = date_format($date_fim, 'Y-m-d H:i:s');

        $actvDesemp = DB::table('desempenho')
            ->selectRaw('sum(acertos) as acertos, sum(erros) as erros')
            ->join('usuario', 'desempenho.id_usuario', '=', 'usuario.id')
            ->join('subatividade', 'desempenho.id_subatividade', '=', 'subatividade.id')
            ->join('atividade', 'subatividade.id_atividade', '=', 'atividade.id')
            ->where('usuario.id', '=', $userId)
            ->where('atividade.id', '=', $atividadeId)
            ->where('desempenho.date_ini', '>=', $date_ini)
            ->where('desempenho.date_fim', '<=', $date_fim)
            ->groupBy('atividade.id')
            ->orderBy('desempenho.created_at', 'desc')
            ->get();

        $totalActvDesemp = DB::table('desempenho')
            ->selectRaw('sum(acertos) as acertos, sum(erros) as erros')
            ->join('usuario', 'desempenho.id_usuario', '=', 'usuario.id')
            ->join('subatividade', 'desempenho.id_subatividade', '=', 'subatividade.id')
            ->join('atividade', 'subatividade.id_atividade', '=', 'atividade.id')
            ->where('usuario.id', '=', $userId)
            ->where('atividade.id', '=', $atividadeId)
            ->groupBy('atividade.id')
            ->orderBy('desempenho.created_at', 'desc')
            ->get();
        $resp = [
            'actvDesemp' => $actvDesemp[0],
            'totalActvDesemp' => $totalActvDesemp[0]
        ];
        return $resp;
    }

    protected function getRelAtividade($userId, $idAtividade, $date_ini, $date_fim){
        $desempenho = DB::table('desempenho')
            ->selectRaw('sum(acertos) as acertos, sum(erros) as erros, (sum(acertos)+sum(erros)) as total')
            ->join('usuario', 'desempenho.id_usuario', '=', 'usuario.id')
            ->join('subatividade', 'desempenho.id_subatividade', '=', 'subatividade.id')
            ->join('atividade', 'subatividade.id_atividade', '=', 'atividade.id')
            ->where('usuario.id', '=', $userId)
            ->where('atividade.id', '=', $idAtividade)
            ->groupBy('atividade.id')
            ->orderBy('desempenho.created_at', 'desc')
            ->get();
        return $desempenho;
    }

    protected function getRelTotal($userId, $idAtividade){
        $desempenho = DB::table('desempenho')
            ->selectRaw('sum(acertos) as acertos, sum(erros) as erros')
            ->join('usuario', 'desempenho.id_usuario', '=', 'usuario.id')
            ->join('subatividade', 'desempenho.id_subatividade', '=', 'subatividade.id')
            ->join('atividade', 'subatividade.id_atividade', '=', 'atividade.id')
            ->where('usuario.id', '=', $userId)
            ->where('atividade.id', '=', $idAtividade)
            ->groupBy('user.id')
            ->orderBy('desempenho.created_at', 'desc')
            ->get();
        return $desempenho;
    }

    protected function getAtividadeById($id){
        $atividade = $this->find($id);
        return $atividade;
    }

    protected function getSubAtvdByAtvd($atividadeId){
        $subatividades = DB::table($this->table)
            ->join('subatividade', 'subatividade.id_atividade', '=', 'atividade.id')
            ->where('atividade.id', '=', $atividadeId)
            ->get();
        return $subatividades;
    }

    protected function getAtvdBySbtvd($subatividadeId){
        $atividade = DB::table($this->table)
            ->join('atividade', 'subatividade.id_atividade', '=', 'atividade.id')
            ->where('subatividade.id', '=', $subatividadeId)
            ->get();
        return $atividade;
    }

    protected function getSubAtvdById($atividadeId){
        $subatividade = DB::table($this->table)
            ->join('subatividade', 'subatividade.id_atividade', '=', 'atividade.id')
            ->where('subatividade.id', '=', $atividadeId)
            ->first();
        return $subatividade;
    }

    protected function getMateriaByAtvd($atividadeId){
        $materia = DB::table($this->table)
            ->join('materia', 'atividade.id_materia', '=', 'materia.id')
            ->where('atividade.id', '=', $atividadeId)
            ->get();
        return $materia;
    }

    protected function getMateriaBySbtvd($sbtvId){
        $materia = DB::table($this->table)
            ->join('atividade', 'subatividade.id_atividade', '=', 'atividade.id')
            ->join('materia', 'atividade.id_materia', '=', 'materia.id')
            ->where('subatividade.id', '=', $sbtvId)
            ->get();
        return $materia;
    }

    protected function getAtividadeBySbtvd($sbtvId){
        $atividade = DB::table($this->table)
            ->join('atividade', 'subatividade.id_atividade', '=', 'atividade.id')
            ->where('subatividade.id', '=', $sbtvId)
            ->get();
        return $atividade;
    }

    protected function getMateriaById($id){
        $materia = $this->find($id);
        return $materia;
    }

    protected function getAtividadesMateria($materiaId){
        $atividades = DB::table($this->table)
            ->join('atividade', 'atividade.id_materia', '=', 'materia.id')
            ->where('materia.id', $materiaId)
            ->get();
        return $atividades;
    }
}