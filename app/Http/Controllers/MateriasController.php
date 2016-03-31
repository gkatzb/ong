<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Materia;
use Illuminate\Support\Facades\Auth;

class MateriasController extends Controller
{

    protected $user;

    public function __construct()
    {
        $this->middleware('auth');
        if(Auth::check()){
            $this->user = Auth::user();
        }
    }

    public function index(Materia $materia){
        $materias = $materia->all();

        if(isset($materias)) {
            return view('home')->with(['materias' => $materias, 'user' => $this->user]);
        }
        return view('home')->with(['Errors' => 'Nenhuma matéria cadastrada!', 'materias' => '', 'user' => $this->user]);
    }

    public function atividade(Materia $materia, $idMateria){
        
        $atividades = $materia->getAtividades($idMateria);
        $materia = $materia->getMateria($idMateria);
        $materias = $materia->getMaterias();

        if(isset($atividades)) {
            return view('materia')->with(['atividades' => $atividades, 'materia' => $materia, 'user' => $this->user]);
        }
        return view('home')->with(['Errors' => 'Nenhuma atividade cadastrada!', 'materias' => $materias, 'user' => $this->user]);
    }
}
