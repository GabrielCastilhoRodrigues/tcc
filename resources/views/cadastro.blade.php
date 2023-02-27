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
	
	<form>
		<div class="cadastro">
			<label for="nome" id="nome">Nome:</label>
			<input class="campo" type="text" name="nome" placeholder="Nome do seu Estabelecimento" size="40" required>
			
			<label for="cnpj">CNPJ:</label>
			<input class="campo" type="text" name="cnpj" placeholder="99.999.999/9999-99">
			<label for="cnpj">Endereço:</label>
			<input class="campo" type="text" name="endereco" placeholder="Rua, número - Bairro">
			
			<label for="categoria">Categorias:</label>
			<input type="checkbox" name="Restaurante" value="Restaurante">Restaurante
			<input type="checkbox" name="Lanchonete" value="Lanchonete">Lanchonete
			<input type="checkbox" name="Pizzaria" value="Pizzaria">Pizzaria 
			<input type="checkbox" name="Bar" value="Bar">Bar 
		
			<label for="mensagem">Descrição:</label>
			<textarea placeholder="Conte um pouco sobre seu negócio..." rows="8" accesskey="B" maxlength="20"></textarea>
									
			<label for="e-mail">E-mail:</label>
			<input class="campo" type="email" name="e-mail" placeholder="Digite seu E-mail" size="50" required>								
			<label for="senha">Senha:</label>
			<input class="campo" type="password" name="senha" placeholder="Digite sua senha"size="25" required>
			<label for="confirmação">Confirmação:</label>
			<input class="campo" type="password" name="confirmação" placeholder="Digite sua senha novamente" size="25" required>						
			<br>
			<br>
			<input class="button" type="submit" name="Salvar" value="Salvar">
			<input class="button" type="reset" name="Apagar" value="Apagar">
		</div>
	</form>
	<br><br>

</body>
</html>