<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\Usuario;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function do_login(Request $request){
        $params = [
                    'login'     => $request->user,
                    'password'  => Hash::make($request->password),
                    'type'      => $request->type,
                    '_token'    => $request->_token
                  ];
        $user = new Usuario();

        if($params['type'] == 'login'){
            $checkUser = $user->get_user($params);
            if($checkUser)
                return redirect('materias');
            return redirect('/')->withErrors('Usuário ou senha inválidos!');
        }

        if($params['type'] == 'cadastro'){
            $createUser = $user->insert_user($params);
            if($createUser)
                return redirect('materias');
            return redirect('/')->withErrors('O usuário ' . $params['login'] . 'já existe!');
        }
    }

    public function login(){
        return view('index');
    }
}
