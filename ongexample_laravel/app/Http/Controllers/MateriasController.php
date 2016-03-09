<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class MateriasController extends Controller
{
    public function index(){
        return view('materias.index');
    }
}
