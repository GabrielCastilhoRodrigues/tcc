<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/cadastro.css">
	<link rel="stylesheet" type="text/css" href="assets/css/body.css">
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

        @if($usuario == null && $usuario == '')
            <div class="button" id="menu">
                <a href="cadastro">Cadastro</a>
                <a href="login">Login</a>
            </div>
        @else
			<div class="logado">
				<div class="usuario">
					{{$usuario}} 
					<i class="fa-solid fa-user"></i>
				</div>
				<div class="button" id="menu">
					<a href="logout" method="POST">Logout</a>
				</div>
			</div>
        @endif
    </section>

	<h1>Cadastro de Usuário</h1>
	
	<form action="{{ route('cadastro.insereUsuario') }}" method="POST">
		@csrf

		<div class="cadastro">
			<label for="nome" id="nome">Nome</label>
			<input class="campo" type="text" name="nome" placeholder="Seu nome" size="40" >
			
			<label for="dt_nascimento">Data de Nascimento</label>
			<input class="campo" type="date" name="dt_nascimento" placeholder="99/99/9999">

			<label for="cpf">CPF</label>
			<input class="campo" type="text" name="cpf" placeholder="999.999.999-99">
									
			<label for="email">E-mail:</label>
			<input class="campo" type="email" name="email" placeholder="Digite seu E-mail" size="50">

			<label for="senha">Senha:</label>
			<input class="campo" type="password" name="senha" placeholder="Digite sua senha"size="25">

			<br><br>
			<input class="acaoForm" type="submit" name="Salvar" value="Salvar">
			<input class="acaoForm" type="reset" name="Apagar" value="Apagar">
			<br><br>
		</div>
	</form>

</body>
</html>