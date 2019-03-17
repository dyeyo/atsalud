<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{

    public  function  LoginUsuario()
    {
        $credenciales = $this->Validate(request(),
            [
                'username' => 'required',
                'password' => 'required'
            ]);
        if (Auth::attempt($credenciales))
        {
            return view('home');
        }
        else
        {
            return back()
                    ->withErrors(['username'=>trans('Auth.failed')])
                    ->withInput(request(['username']));
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
