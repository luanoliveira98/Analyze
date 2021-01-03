<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColNivelPosicaoToUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->enum('nivel', ['Admin', 'Administração', 'Staff', 'Elenco'])->default('Elenco')->after('senha');
            $table->enum('posicao', ['Coach', 'Analista', 'Top', 'Jg', 'Mid', 'Adc', 'Sup'])->after('nivel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->dropColumn('nivel');
            $table->dropColumn('posicao');
        });
    }
}
