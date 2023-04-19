<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;

    //Define o nome da tabela
    public $table = 'contrato';

    //Define que não terá o campo padrão de update e create do laravel
    public $timestamps = false;

    //Define o nome da chave primária da tabela
    public $primaryKey = 'id_contrato';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'contrato',
        'id_cliente',
        'dt_cadastro',
        'dt_alteracao',
        'dt_validade',
        'ativo',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'id_cliente' => 'int',
        'dt_cadastro' => 'datetime',
        'dt_alteracao' => 'datetime',
        'dt_validade' => 'date',
        'ativo' => 'int',
    ];
}
