@extends('templates.navbar')

@section('title', 'Login')

@section('content')
    <div class="cadastro">
        @if (session()->has('error-1'))
            <div class="error">
                <strong>{{session('error-1')}}</strong>
            </div>
        @elseif(session()->has('error-2'))
            <div class="error">
                <strong>{{session('error-2')}}</strong>
            </div>
        @endif

        <form method="POST" action="{{ route('login.conectaUsuario') }}">
            @csrf

            <label>Email</label>
            <input class="campo" type="text" name="email" placeholder="Digite seu email">

            <label>Senha</label>
            <input class="campo" type="password" name="senha" placeholder="Digite sua senha">

            <div class="logar">
                <input class="confirma" type="submit" value="Login">
                <a href="esqueceu-senha" class="forgot">Esqueceu sua senha?</a>
            </div>
        </form>
    </div>
@endsection