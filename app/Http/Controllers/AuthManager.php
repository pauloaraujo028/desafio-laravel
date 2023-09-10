<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AuthManager extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect(route("home"));
        }

        return view("auth.login");
    }

    public function register()
    {
        if (Auth::check()) {
            return redirect(route("home"));
        }
        return view("auth.register");
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return  redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with("error", "Login are not valid ");
    }

    public function registerPost(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $data['nome'] = $request->nome;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        if ($request->has('sobrenome')) {
            $data['sobrenome'] = $request->sobrenome;
        }

        $user = User::create($data);

        if (!$user) {
            return redirect(route('register'))->with("error", "Registration failed try again");
        }
        return redirect(route('login'))->with("sucess", "Registration sucess, Login to acess the app. ");
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }


    // protected function authenticated(Request $request, $user)
    // {
    //     if (!$user->cadastroCompleto()) {
    //         return redirect()->route('profile');
    //     }

    //     return redirect()->route('dashboard');
    // }
}
