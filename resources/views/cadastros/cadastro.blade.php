@extends('templates.navbar')

@section('title', 'Cadastro de Usuario')

@section('content')
	<h1>Cadastro de Usuário</h1>

	@if (session()->has('error-4'))
		<div class="retorno">
            <div class="error">
                <strong>{{session('error-4')}}</strong>
            </div>
		</div>
    @elseif(session()->has('ok-1'))
		<div class="retorno">
			<div class="ok">
                <strong>{{session('ok-1')}}</strong>
            </div>
		</div>
    @endif
	
	<form action="{{ route('cadastro.insereUsuario') }}" method="POST">
		@csrf

		<div class="cadastro">
			<label for="nome" id="nome">Nome</label>
			<input class="campo" type="text" name="nome" placeholder="Seu nome" size="40" >
			
			<label for="dt_nascimento">Data de Nascimento</label>
			<input class="campo" type="date" name="dt_nascimento" placeholder="99/99/9999">

			<label for="cpf">CPF</label>
			<input class="campo" type="text" name="cpf" placeholder="999.999.999-99">
									
			<label for="email">E-mail</label>
			<input class="campo" type="email" name="email" placeholder="Digite seu E-mail" size="50">

			<label for="senha">Senha</label>
			<input class="campo" type="password" name="senha" id="senha" placeholder="Digite sua senha" size="25">

			<label for="confirmaSenha">Confirme sua senha</label>
			<input class="campo" type="password" name="confirmaSenha" id="confirmaSenha" placeholder="Digite sua senha" size="25" required>

			<br><br>
			<input class="acaoForm" type="submit" name="Salvar" value="Salvar" id="salvar">
			<input class="acaoForm" type="reset" name="Apagar" value="Apagar">
			<br><br>
		</div>
	</form>
@endsection