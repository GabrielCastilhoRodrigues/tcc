@if(session()->has('usuario'))
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/body.css">
    <link rel="stylesheet" href="/assets/css/cadastro.css">
    <link rel="stylesheet" href="/assets/css/usuario.css">
    <script type="text/javascript" src="/assets/js/script.js"></script>
    <script src="https://kit.fontawesome.com/a97d3ea7a7.js" crossorigin="anonymous"></script>
    <title>Dados Cadastro</title>
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
                    <a href="dados-usuario" class="dadosUsuario">
                        {{
                            session()->get('usuario')['nome']
                        }} 
                        <i class="fa-solid fa-user"></i>
                    </a>
                </div>
                <div class="button" id="menu">
                    <a href="logout" method="POST">Logout</a>
                </div>
            </div>
        @endif
    </section>
    <!--section-->

    <h3 class="subtitulo">Bem vindo "{{session()->get('usuario')['nome']}}"</h3>
    <h4>Segue abaixo seus dados cadastrais</h4>

    <div class="retorno">
        @if (session()->has('error-3'))
            <div class="error">
                <strong>{{session('error-3')}}</strong>
            </div>
        @elseif(session()->has('ok-2'))
            <div class="ok">
                <strong>{{session('ok-2')}}</strong>
            </div>
        @endif
    </div>

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