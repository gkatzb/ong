<?php

namespace App\Http\Controllers;

use App\Atividade;
use App\Materia;
use App\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AtividadesController extends Controller
{

    protected $atividade;
    protected $atividadeId;
    protected $materia;
    protected $atividades;
    protected $subatividades;
    protected $user;
    protected $userId;

    public function __construct()
    {
        $this->middleware('auth');
        if(Auth::check()){
            $this->user = Auth::user();
            $this->userId = Auth::user()->id;
        }
    }

    public function index(Atividade $atividade, Materia $materia, $atividadeId){
        $this->atividadeId = $atividadeId;
        $this->atividade = $atividade->getAtividadeById($this->atividadeId);
        $this->materia = $materia->find($this->atividade->id_materia);
        $this->atividades = $this->materia->getAtividades($this->materia->id);
        $this->subatividades = $this->atividade->subatividades($this->atividadeId);

        if(isset($this->subatividades)) {
            return view('atividade')->with([
                'subatividades' => $this->subatividades,
                'atividade' => $this->atividade,
                'materia' => $this->materia,
                'userId' => $this->userId
            ]);
        }
        return view('materia')->withErrors([
                'Errors' => 'Atividade não cadastrada!',
                'materia' => $this->materia,
                'atividades' => $this->atividades,
                'userId' => $this->userId
        ]);
    }

    public function desempenho(Atividade $atividade, Materia $materia, $idSubatividade){
        $desempenho = $atividade->getUserDesempenho($this->user->id, $idSubatividade);
        $atividadeId = $atividade->getSubAtividadeById($idSubatividade)[0];
        $atividadeId = $atividadeId->id;
        $this->atividade = $atividade->getAtividadeById($atividadeId);
        $this->materia = $materia->find($this->atividade->id_materia);
        $this->atividades = $this->materia->getAtividades($this->materia->id);
        $this->subatividades = $this->atividade->subatividades($atividadeId);

        if(isset($this->subatividades)) {
            return view('desempenho')->with([
                'subatividades' => $this->subatividades,
                'atividade' => $this->atividade,
                'desempenho' => $desempenho[0],
                'materia' => $this->materia,
                'userId' => $this->userId
            ]);
        }
        return view('desempenho')->withErrors([
            'Errors' => 'Atividade não cadastrada!',
            'materia' => $this->materia,
            'desempenho' => $desempenho,
            'atividades' => $this->atividades,
            'userId' => $this->userId
        ]);
    }

    public function cadastrarAtividade(Request $request, Atividade $atividade){
        $data =  [
            'id_usuario' => $this->user->id,
            'id_subatividade' => $request['hdn_subatividade_id'],
            'acertos' => $request['acertos'],
            'erros' => $request['erros'],
            'created_at' => \Carbon\Carbon::now()
        ];
        $desempenho = $atividade->insertDesempenho($data);
        $idSubatividade = $request['hdn_subatividade_id'];

        if($desempenho)
            return Redirect::intended(route('desempenho', $idSubatividade));
        return Redirect::intended(route('desempenho', $idSubatividade))->withErrors('Ocorreu um erro ao cadastrar o desempenho');
    }
}
