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
        if (!Schema::hasTable('usuario')){
            Schema::create('usuario', function (Blueprint $table) {
                $table->id('id_usuario')->autoIncrement();
                $table->string('nome');
                $table->date('dt_nascimento');
                $table->string('cpf');
                $table->string('email')->unique();
                $table->string('senha');
                $table->datetime('dt_cadastro');
                $table->datetime('dt_alteracao');
                $table->integer('nivel');
                $table->primary('id_usuario');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_usuario');
    }
};
