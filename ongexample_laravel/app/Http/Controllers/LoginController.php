<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function search_login(Request $request){
        //db query
        $this->login(1);
    }

    public function login($params){
        return redirect()->action('materias');
    }
}
