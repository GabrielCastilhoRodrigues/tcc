@if(session()->has('usuario') 
    && session()->get('usuario')['nivel'] == 2
    && $user)
    @extends('templates.navbar')

    @section('title', 'Acesso Admin')

    @section('content')
    
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
            <form action="{{ route('admin.alteraUsuario', $user->id_usuario) }}" method="POST">
                @csrf
                @method('PUT')

                    <label for="nome" id="nome">Nome</label>
                    <input class="campo" type="text" name="nome" placeholder="Seu nome" size="40" value="{{$user->nome}}">
                    
                    <label for="dt_nascimento">Data de Nascimento</label>
                    <input class="campo" type="date" name="dt_nascimento" placeholder="99/99/9999" value="{{$user->dt_nascimento->format('Y-m-d')}}">

                    <label for="cpf">CPF</label>
                    <input class="campo" type="text" name="cpf" placeholder="999.999.999-99" value="{{$user->cpf}}">
                                            
                    <label for="email">E-mail:</label>
                    <input class="campo" type="email" name="email" placeholder="Digite seu E-mail" size="50" value="{{$user->email}}">

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