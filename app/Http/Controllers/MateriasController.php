<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Request;

class MateriasController extends Controller
{

    public function index(Request $request, Usuario $user){
        return view('auth.materias.index')->with($user->toArray());
    }
}
