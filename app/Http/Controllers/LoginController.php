<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{

    public function do_login(Request $request){
        $params = [
                    'login'     => $request->user,
                    'password'  => $request->password,
                    'type'      => $request->type,
                    '_token'    => $request->_token
                  ];
        $user = new Usuario();

        if($params['type'] == 'login'){
            $checkUser = $user->check_user($params);

            if (Hash::check($params['password'], $checkUser->senha)) {
                $userId = $checkUser->id;
                $authUser = Auth::loginUsingId($userId);

                if ($authUser) {
                    return Redirect::route('materias', array('userId' => $authUser->id));
                }
            }

            return redirect('/')->withErrors('Usuário ou senha inválidos!');
        }

        if($params['type'] == 'cadastro'){
            $createUser = $user->insert_user($params);
            if($createUser)
                return redirect('materias');
            return redirect('/')->withErrors('O usuário "' . $params['login'] . '" já existe!');
        }
    }

    public function login(Usuario $user){
        return view('index');
    }
}
