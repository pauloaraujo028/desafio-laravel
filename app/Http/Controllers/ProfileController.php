<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = Auth::user();

        return view('livewire.busca-cep', [
            'nome' => $user->nome,
            'email' => $user->email,
        ]);
    }
}
