<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testeController extends Controller
{
    public function teste(Request $request){    
        // Insere um novo usuário ao banco de dados:
        $user = \App\Models\Usuario::create([
            'nome'         => 'TESTE',
            'dt_nascimento'     => getdate(),
            'cpf'     => '44977585836',
            'email'     => 'gabrielrcastilho',
            'senha'     => bcrypt('aaa'),
            'dt_cadastro'     => getdate(),
            'dt_alteracao'     => getdate(),
        ]);

        // Se quiser exibir os dados do usuário: dd($user);
    
        // Listando os usuários
        $users = \App\User::get();
    
        echo '<hr>';
        foreach ($users as $user) {
            echo "{$user->name} <br>";
        }
        echo '<hr>';
    }
}
