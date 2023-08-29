<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function authentication(Request $request)
    {
        $user = User::all();
        $userAuth = $request->only('email', 'password');
        if (Auth::attempt($userAuth) == true){

            $request->session()->put('user',$user );
            return redirect()->route('admin.home');
        }else{
            return redirect()->route('home')->withErrors(['Erro' => 'Senha e o login são invalidos']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }


}
