<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        $credentials = $this->validate(request(), [
            'username' => 'required_username',
            'password' => 'required_password'
        ]);
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        } else {
            return back()->withinput($request->all())->withErrors(['username' => trans('auth.failed')]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
