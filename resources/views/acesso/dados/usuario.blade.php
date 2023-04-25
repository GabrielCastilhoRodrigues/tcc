@if(session()->has('usuario'))
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/body.css">
    <link rel="stylesheet" href="/assets/css/usuario.css">
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

    <h3 class="subtitulo">Bem vindo "{{session()->get('usuario')['nome']}}"</h3>
    <h4>Segue abaixo seus dados cadastrais</h4>
 
    @if (session()->has('error-3'))
        <div class="retorno">
            <div class="error">
                <strong>{{session('error-3')}}</strong>
            </div>
        </div>
    @elseif(session()->has('error-4'))
        <div class="retorno">
            <div class="error">
                <strong>{{session('error-4')}}</strong>
            </div>
        </div>
    @elseif(session()->has('ok-2'))
        <div class="retorno">
            <div class="ok">
                <strong>{{session('ok-2')}}</strong>
            </div>
        </div>
    @endif

    <div class="cadastro">
        <form action="{{ route('cadastro.atualizaUsuario') }}" method="POST">
            @csrf
                <label for="nome" id="nome">Nome</label>
                <input class="campo" type="text" name="nome" placeholder="Seu nome" size="40" value="{{session()->get('usuario')['nome']}}">
                
                <label for="dt_nascimento">Data de Nascimento</label>
                <input class="campo" type="date" name="dt_nascimento" placeholder="99/99/9999" value="{{session()->get('usuario')['dt_nascimento']->format('Y-m-d')}}">

                <label for="cpf">CPF</label>
                <input class="campo" type="text" name="cpf" placeholder="999.999.999-99" value="{{session()->get('usuario')['cpf']}}">
                                        
                <label for="email">E-mail:</label>
                <input class="campo" type="email" name="email" placeholder="Digite seu E-mail" size="50" value="{{session()->get('usuario')['email']}}">

                <label for="senha">Senha:</label>
                <input class="campo" type="password" name="senha" placeholder="Digite sua senha"size="25" required>

                <label for="confirmaSenha">Confirme sua senha</label>
			<input class="campo" type="password" name="confirmaSenha" id="confirmaSenha" placeholder="Digite sua senha" size="25" required>

                <br><br>
                <input class="acaoForm" type="submit" name="Salvar" value="Salvar">
                <br><br>
        </form>
    </div>
</body>
</html>

@else
    {{
        session()->flash('error-2', 'Necessário estar logado para visualizar os dados')
    }}
    {{
        view('acesso.login')
    }}
@endif