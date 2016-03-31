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

        $atividade = $atividade->getAtividade($atividadeId);
        $materia = $atividade->getMateria($atividadeId);
        $subatividades = $atividade->getSubatividades($atividadeId);

        return view('atividade')->with([
            'atividade' => $atividade,
            'subatividades' => $subatividades,
            'materia' => $materia,
        ]);
    }

    public function desempenho($idSubatividade){
        $desempenho = new Desempenho();
        $subatividade = new Subatividade();

        $atividade = $subatividade->getAtividade($idSubatividade);
        $materia = $subatividade->getMateria($idSubatividade);

        $desempenho = $desempenho->getUserDesempenho($this->user->id, $idSubatividade);

        return view('desempenho')->with([
            'atividade' => $atividade[0],
            'desempenho' => $desempenho[0],
            'materia' => $materia[0],
            'userId' => $this->userId
        ]);
    }

    public function cadastrarDesempenho(Request $request){
        $desempenho = new Desempenho();

        $data =  [
            'id_usuario' => $this->user->id,
            'id_subatividade' => $request['hdn_subatividade_id'],
            'acertos' => $request['acertos'],
            'erros' => $request['erros'],
        ];
        
        $desempenho = $desempenho->insertDesempenho($data);
        $idSubatividade = $request['hdn_subatividade_id'];

        if($desempenho)
            return Redirect::intended(route('desempenho', $idSubatividade));
        return Redirect::intended(route('desempenho', $idSubatividade))->withErrors('Ocorreu um erro ao cadastrar o desempenho');
    }
}
