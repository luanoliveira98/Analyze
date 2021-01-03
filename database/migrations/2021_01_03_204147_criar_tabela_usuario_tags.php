<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaUsuarioTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->enum('nivel', ['Admin', 'Diretoria', 'Staff', 'Elenco'])->default('Elenco');
            $table->enum('posicao', ['Coach', 'Analista', 'Top', 'Jg', 'Mid', 'Adc', 'Sup'])->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('usuario_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_tags');
    }
}
