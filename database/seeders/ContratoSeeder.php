<?php

namespace Database\Seeders;

use App\Models\Contrato;
use DateTime;
use Doctrine\DBAL\Types\BinaryType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataAtual = new DateTime;
        $dado = file_get_contents('/home/gabrodrigues/projetos/tcc/database/seeders/Tilapia.jpeg');
        
        Contrato::create([
            'contrato' => 10,
            'id_cliente' => 1,
            'dt_cadastro' => $dataAtual,
            'dt_alteracao' => $dataAtual,
            'dt_validade' => $dataAtual,
            'ativo' => '1',
        ]);
    }
}
