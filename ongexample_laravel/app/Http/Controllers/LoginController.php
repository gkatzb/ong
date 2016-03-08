<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Auth;
use App\Usuario as Usuario;

class LoginController extends Controller
{
    public function search_login(Request $request){
        $user = ['login' => $request->user, 'senha' => $request->password];

        if(Auth::attempt($user)){
            $token = Auth:: ->getAuthPassword
            $this->login($token);
        }
    }

    public function login($token){
        return redirect()->action('materias');
    }
}
