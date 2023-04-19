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
        if (!Schema::hasTable('contrato')){
            Schema::create('contrato', function (Blueprint $table) {
                $table->id('id_contrato')->autoIncrement();
                $table->binary('contrato');
                $table->unsignedBigInteger('id_cliente');
                $table->foreign('id_cliente')->references('id_cliente')->on('cliente');
                $table->datetime('dt_cadastro');
                $table->datetime('dt_alteracao');
                $table->date('dt_validade');
                $table->integer('ativo');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrato');
    }
};
