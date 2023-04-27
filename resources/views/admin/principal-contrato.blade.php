@if(session()->has('usuario') && session()->get('usuario')['nivel'] == 2)
    @extends('templates.navbar')

    @section('title', 'Atualiza Dados')

    @section('content')        
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
    @endsection
@else
    {{
        session()->flash('error-2', 'Necessário estar logado para visualizar os dados')
    }}
    {{
        view('acesso.login')
    }}
@endif