<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    //Define o nome da tabela
    public $table = 'usuario';

    //Define que não terá o campo padrão de update e create do laravel
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome',
        'dt_nascimento',
        'cpf',
        'email',
        'senha',
        'dt_cadastro',
        'dt_alteracao',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'senha',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'nome' => 'string',
        'cpf' => 'string',
        'email' => 'string',
        'senha' => 'string',
        'dt_cadastro' => 'datetime',
        'dt_alteracao' => 'datetime',
        'dt_nascimento' => 'date',
    ];
}