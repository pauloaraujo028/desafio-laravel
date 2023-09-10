@extends('layouts.app')
@section('title', 'Login')

@section('content')
    <div class="flex w-full h-screen justify-center items-center flex-col">
        <div class="text-xs">
            @if ($errors->any())
                <div class="">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            @if (session()->has('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if (session()->has('sucess'))
                <div class="alert alert-sucess">{{ session('sucess') }}</div>
            @endif
        </div>
        <form action="{{ route('login.post') }}" method="POST" class="col-4 border p-4 rounded-md text-sm shadow-lg">
            @csrf
            <div class="text-center mb-4 text-gray-600">
                <h1 class="text-center text-2xl uppercase">Bem vindo de Volta</h1>
                <span>Faça o login em sua conta</span>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3 flex justify-between items-center">
                <div class="flex items-center">
                    <input type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                        id="exampleCheck1">
                    <label class="ml-1 text-sm text-gray-600 dark:text-gray-400" for="exampleCheck1">Continuar
                        conectado</label>
                </div>
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="#">Esqueceu sua
                    senha?</a>
            </div>
            <div class="flex justify-end items-center gap-2 mt-4">
                @if (Route::has('register'))
                    <label class="text-sm text-gray-600">Não tem uma conta?
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                            Inscreva-se
                        </a>
                    </label>
                @endif
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-blue-700 border border-transparent font-semibold text-sm text-white uppercase tracking-widest hover:bg-blue-800 transition ease-in-out duration-150 rounded-md">Entrar</button>
            </div>
        </form>
        <div cla></div>
    </div>

@endsection
