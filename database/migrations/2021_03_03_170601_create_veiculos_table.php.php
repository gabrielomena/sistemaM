<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table){
           $table->bigIncrements('id');
           $table->unsignedBigInteger('hospital_id');
           $table->foreign('hospital_id')->references('id')->on('hospitals');
           $table->integer('administrativo')->nullable();
           $table->integer('ambulancia_terrestre')->nullable();
           $table->integer('ambulancia_fluvial')->nullable();
           $table->integer('existente');
           $table->integer('funcional');
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
        Schema::dropIfExists('veiculos');
    }
}
