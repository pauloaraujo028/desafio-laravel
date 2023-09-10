@extends('layouts.app')
@section('title', 'Register')

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
    <form action="{{ route('register.post') }}" method="POST" class="col-4 border rounded-md p-4 text-sm ">
        @csrf
        <h1 class="text-center text-3xl uppercase text-gray-600 mb-4">Cadastre-se</h1>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required autofocus
                autocomplete="nome">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="confirm-password" class="form-label">Confirmar Senha</label>
            <input type="password" class="form-control" id="confirm-password" name="confirm-password">
        </div>
        <div class="flex justify-end items-center gap-2 mt-4">
            @if (Route::has('login'))
                <label class="text-sm text-gray-600">Já possui uma conta?
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        Entrar
                    </a>
                </label>
            @endif
            <button type="submit"
                class="inline-flex items-center px-4 py-2 bg-blue-700 border border-transparent font-semibold text-sm text-white uppercase tracking-widest hover:bg-blue-800 transition ease-in-out duration-150 rounded-md">Cadastrar</button>
        </div>
    </form>
</div>
