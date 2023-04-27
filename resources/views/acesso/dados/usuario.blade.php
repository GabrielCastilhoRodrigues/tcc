@if(session()->has('usuario'))
    @extends('templates.navbar')

    @section('title', 'Atualiza Dados')

    @section('content')
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
    @endsection
@else
    {{
        session()->flash('error-2', 'Necessário estar logado para visualizar os dados')
    }}
    {{
        view('acesso.login')
    }}
@endif