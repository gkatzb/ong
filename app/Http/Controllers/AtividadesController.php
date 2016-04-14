<?php

namespace App\Http\Controllers;

use App\Atividade;
use App\Desempenho;
use App\Materia;
use App\Subatividade;
use App\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class AtividadesController extends Controller
{

    protected $user;
    protected $userId;

    public function __construct()
    {
        $this->middleware('auth');
        if(Auth::check()){
            $this->user = Auth::user();
            $this->userId = $this->user->id;
        }
    }

    public function index($atividadeId){
        $atividade = new Atividade();

        $atividade = $atividade->getAtividade($atividadeId, $subatvdId = 0);
        $materia = $atividade->getMateria($atividadeId);
        $subatividades = $atividade->getSubatividades($atividadeId);
        $subatividade = $atividade->getSubatividade($atividadeId);

        return view('atividade')->with([
            'atividade' => $atividade,
            'subatividade' => $subatividade,
            'subatividades' => $subatividades,
            'materia' => $materia,
            'user' => $this->user
        ]);
    }

    public function concluido($atividade_id, $date_ini, $date_fim){
        $materias = new Materia();
        $atividade = new Atividade();
        $desempenho = new Desempenho();
        $acvtId = $atividade_id;

        $materia = $materias->all();
        $atividade = $atividade->getAtividade($acvtId);
        $desempenho = $desempenho->getDesempenhoByAtvd($this->userId, $acvtId, $date_ini, $date_fim);

        $pctAcertos = ($desempenho->acertos)/100;

        $pctAcertos = $pctAcertos*$desempenho->total;

        switch ($pctAcertos){
            case $pctAcertos > 70.0:
                $message = "Muito bom!";
                break;
            case $pctAcertos >= 30.5 && $pctAcertos <= 70.0:
                $message = "Bom";
                break;
            case $pctAcertos < 30.5:
                $message = "Tente novamente";
                break;
        }

        return view('atvd-concluida')->with([
            'atividade' => $atividade,
            'desempenho' => $desempenho,
            'materia' => $materia,
            'userId' => $this->userId,
            'atvdConcluida' => true,
            'message' => $message,
            'date_ini' => $date_ini,
            'date_fim' => $date_fim,
            'user' => $this->user
        ]);
    }

    public function relatorio($atividade_id, $date_ini, $date_fim){
        $materias = new Materia();
        $atividade = new Atividade();
        $desepenho = new Desempenho();
        $acvtId = $atividade_id;

        $materia = $materias->all();
        $atividade = $atividade->getAtividade($acvtId);
        $desepenho = $desepenho->getRelDesempenho($this->userId, $acvtId, $date_ini, $date_fim);

        return view('desempenho')->with([
            'atividade' => $atividade,
            'materia' => $materia,
            'userId' => $this->userId,
            'atvdConcluida' => true,
            'desempenho' => $desepenho,
            'date_ini' => $date_ini,
            'date_fim' => $date_fim,
            'user' => $this->user
        ]);
    }

    public function cadastrarDesempenho(Request $request){
        $desempenho = new Desempenho();

        $data =  [
            'id_usuario' => $this->user->id,
            'id_subatividade' => $request['subtvd_id'],
            'acertos' => $request['acertos'],
            'erros' => $request['erros'],
            'date_ini' => $request['date_ini'],
            'date_fim' => $request['date_fim'],
        ];
        
        $desempenho = $desempenho->insertDesempenho($data);
        $idSubatividade = $request['subtvd_id'];

        return json_encode($desempenho);

        //if($desempenho)
            //return Redirect::intended(route('desempenho', $idSubatividade));
        //return Redirect::intended(route('desempenho', $idSubatividade))->withErrors('Ocorreu um erro ao cadastrar o desempenho');
    }
}
