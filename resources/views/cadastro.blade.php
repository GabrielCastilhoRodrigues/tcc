<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="assets/css/cadastro.css">
</head>

<body>
	
	<header>
        <a href="/">
            <img src="assets/img/bar/Logo.png" alt="logo" class="logo">
        </a>
    </header>

	<p class="title">Cadastro de Estabelecimento</p>
	
	<form action="{{ route('cadastro.insereUsuario') }}" method="POST">
		@csrf

		<div class="cadastro">
			<label for="nome" id="nome">Nome</label>
			<input class="campo" type="text" name="nome" placeholder="Nome do seu Estabelecimento" size="40" >
			
			<label for="dt_nascimento">Data de Nascimento</label>
			<input class="campo" type="date" name="dt_nascimento" placeholder="99/99/9999">

			<label for="cpf">CPF</label>
			<input class="campo" type="text" name="cpf" placeholder="999.999.999-99">
									
			<label for="email">E-mail:</label>
			<input class="campo" type="email" name="email" placeholder="Digite seu E-mail" size="50">

			<label for="senha">Senha:</label>
			<input class="campo" type="password" name="senha" placeholder="Digite sua senha"size="25">

			<br>
			<br>
			<input class="button" type="submit" name="Salvar" value="Salvar">
			<input class="button" type="reset" name="Apagar" value="Apagar">
			<br>
			<br>
		</div>
	</form>
	<br><br>

</body>
</html>