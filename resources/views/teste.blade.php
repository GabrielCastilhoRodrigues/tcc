<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro</h1>

    <hr>

    <form method="get">
        @csrf

        <b>Produto</b>
        <input type="text" name="produto">
        <br><br>

        <b>Preço</b>
        <input type="text" name="preco">
        <br><br>

        <b>Categoria</b>
        <input type="text" name="categoria">
        <br><br>

        <input type="submit" value="salvar">
    </form>

    <hr>
</body>
</html>