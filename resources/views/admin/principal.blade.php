@if(session()->has('usuario') && session()->get('usuario')['nivel'] == 2)
    @extends('templates.navbar')

    @section('title', 'Principal Admin')

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
                <h2 class="titulo">Listagem de Usuários</h2>

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
                @if(session()->has('usuarios'))
                    <table border="1" class="lista-usuarios">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th colspan="2">Ações</th>
                        </tr>
                        @foreach(session()->get('usuarios') as $usuario)
                            <tr class="usuario">
                                <td>{{$usuario->id_usuario}}</td>
                                <td>{{$usuario->nome}}</td>
                                <td>{{$usuario->email}}</td>
                                <td class="acoes">
                                    <form action="/deleta-usuario/{{ $usuario->id_usuario }}" method="POST" class="form-excluir">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="excluir" onclick="return confirm('Deseja excluir o usuário?')">Excluir</button>
                                    </form>
                                    <a class="editar" href="/admin-usuario/{{$usuario->id_usuario}}">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
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