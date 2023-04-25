<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/cadastro.css">
	<link rel="stylesheet" type="text/css" href="assets/css/body.css">
	<script type="text/javascript" src="/assets/js/script.js"></script>
	<script type="text/javascript" src="/assets/js/validacoes.js"></script>
	<script src="https://kit.fontawesome.com/a97d3ea7a7.js" crossorigin="anonymous"></script>
	<title>Cadastro</title>
</head>

<body>
	
	<nav>
        <a href="/" class="link-logo">
            <img src="/assets/img/principal/logo.png" alt="Logo" class="logo">
        </a>

        <h1 class="title" class="titulo">Aqui você encontra os melhores lugares!</h1>

        <ul class="ul-principal">

            @if(!session()->has('usuario'))
                <li class="li-nav">
                    <a href="#" class="bt-cad">Cadastro</a>
                    <ul class="cadastros">
                        <li><a href="#">Usuário</a></li>
                        <li><a href="#">Cliente</a></li>
                    </ul>
                </li>
                <li class="li-nav">
                    <a href="#" class="bt-log">Login</a>
                    <ul class="logins">
                        <li><a href="login">Usuário</a></li>
                        <li><a href="#">Cliente</a></li>
                    </ul>
                </li>
            @else
                <li class="li-nav">
                    <a href="dados-usuario/{{session()->get('usuario')['nivel']}}" class="dadosUsuario">
                        {{
                            implode(' ', array_slice(explode(' ', session()->get('usuario')['nome']), 0, 2))
                        }} 
                        <i class="fa-solid fa-user"></i>
                    </a>
                </li>
                <li class="li-nav">
                    <a href="/logout">Logout</a>
                </li>
            @endif
        </ul>
    </nav>

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

</body>
<script src="/assets/js/controle-acesso.js"></script>
</html>