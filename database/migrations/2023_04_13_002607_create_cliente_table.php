<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('cliente')){
            Schema::create('cliente', function (Blueprint $table) {
                $table->id('id_cliente')->autoIncrement();
                $table->string('nome');
                $table->date('dt_nascimento');
                $table->string('cpf');
                $table->string('email')->unique();
                $table->string('senha');
                $table->datetime('dt_cadastro');
                $table->datetime('dt_alteracao');
                $table->integer('ativo');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};
