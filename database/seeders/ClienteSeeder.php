<?php

namespace Database\Seeders;

use App\Models\Cliente;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataAtual = new DateTime;

        Cliente::create([
            'nome' => 'Gabriel Castilho',
            'dt_nascimento' => $dataAtual->format('m/d/Y'),
            'cpf' => '1',
            'email' => '1@mail.com',
            'senha' => '1',
            'dt_cadastro' => $dataAtual,
            'dt_alteracao' => $dataAtual,
            'ativo' => 1,
        ]);
    }
}
