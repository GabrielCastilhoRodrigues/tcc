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
	
	<!--section navbar-->
    <section class="navbar">
        <div class="logo">
            <a href="/">
                <img src="/assets/img/principal/logo.png" alt="Logo">
            </a>
        </div>

        <h1 class="title">Aqui você encontra os melhores lugares!</h1>

        @if(!session()->has('usuario'))
            <div class="button" id="menu">
                <a href="cadastro">Cadastro</a>
                <a href="login">Login</a>
            </div>
        @else
            <div class="logado">
                <div class="usuario">
                    {{
                        session()->get('usuario')['nome']
                    }} 
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="button" id="menu">
                    <a href="logout" method="POST">Logout</a>
                </div>
            </div>
        @endif
    </section>

	<h1>Cadastro de Usuário</h1>

	@if (session()->has('error-4'))
		<div class="retorno">
            <div class="error">
                <strong>{{session('error-4')}}</strong>
            </div>
		</div>
    @elseif(session()->has('ok-3'))
		<div class="retorno">
			<div class="ok">
                <strong>{{session('ok-3')}}</strong>
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
</html>