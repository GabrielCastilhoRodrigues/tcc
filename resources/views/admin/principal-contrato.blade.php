@if(session()->has('usuario') && session()->get('usuario')['nivel'] == 2)
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/assets/css/body.css">
        <link rel="stylesheet" href="/assets/css/listagem-contrato.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet"> 
        <script type="text/javascript" src="/assets/js/script.js"></script>
        <script src="https://kit.fontawesome.com/a97d3ea7a7.js" crossorigin="anonymous"></script>
        <title>Dados Cadastro</title>
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
                            <li><a href="cadastro">Usuário</a></li>
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
        
        <div class="conteudo">
            <div class="navbar-lateral">
                <div class="conteudo-navbar">
                    <a href="/dados-usuario/{{session()->get('usuario')['nivel']}}" class="item-navbar">Listagem de Usuários</a></li>
                    <a href="/lista-contratos" class="item-navbar">Listagem de Contratos</a></li>
                    <a href="#" class="item-navbar">Listagem de Clientes</a></li>
                </div>
            </div>

            <div class="conteudo-admin">

                <h2 class="titulo">Listagem de Contratos</h2>
                <br>
                <button class="insereContrato" id='view'>Insere Contrato</button>

                <div class="listagem">
                    Listagem Contratos
                </div>

                <div class="form-cadastro">
                    <form class="cadastro">
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
                    </form>
                </div>

                @if (session()->has('error-5'))
                    <div class="retorno">
                        <div class="error">
                            <strong>{{session('error-5')}}</strong>
                        </div>
                    </div>
                @elseif(session()->has('ok-3'))
                    <div class="retorno">
                        <div class="ok">
                            <strong>{{session('ok-3')}}</strong>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </body>
    <script src="/assets/js/listagem-contrato.js"></script>
    </html>
@else
    {{
        session()->flash('error-2', 'Necessário estar logado para visualizar os dados')
    }}
    {{
        view('acesso.login')
    }}
@endif