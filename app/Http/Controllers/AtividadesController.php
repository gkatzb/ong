<?php

namespace App\Http\Controllers;

use App\Atividade;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Request;

class AtividadesController extends Controller
{

    public function index(Request $request, Atividade $atividade){
        $atividades = $atividade->get_atividade($request);
        $materiaNome = $request->nomeMateria;

        return ['url' => 'auth.materia.'.$materiaNome.'.atividades.index'];
        //return view('auth.materia.'.$materiaNome.'.atividades.index')->with($atividades->toArray());
    }
}
