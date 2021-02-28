<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDadosMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_municipios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('area_territorial');
            $table->string('populacao_estimada');
            $table->string('densidade_demografica');
            $table->string('pib_percapita');
            $table->string('idh');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dados_municipios');
    }
}
