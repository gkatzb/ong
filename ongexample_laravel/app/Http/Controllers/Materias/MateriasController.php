<?php

namespace App\Http\Controllers\Materias;

use Illuminate\Routing\Controller;

class MateriasController extends Controller
{
    public function search_materias(){
        //db query
    }

    public function index(){
        return view('materias.index');
    }
}
