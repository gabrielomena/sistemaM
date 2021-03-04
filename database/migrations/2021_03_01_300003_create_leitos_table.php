<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leitos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('hospital_id');
            $table->foreign('hospital_id')->references('id')->on('hospitals');
            $table->integer('leito_clinico');
            $table->integer('leito_cirurgico');
            $table->integer('leito_obstetrico');
            $table->integer('leito_pediatrico');
            $table->integer('leito_outro');
            $table->integer('suporte_ventilatorio');
            $table->integer('uci_adulto');
            $table->integer('uci_pediatrico');
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
        Schema::dropIfExists('leitos');
    }
}
