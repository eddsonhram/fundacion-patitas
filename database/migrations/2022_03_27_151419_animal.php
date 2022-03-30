<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Animal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal', function(Blueprint $table){
        $table->engine = 'InnoDB';
        $table->bigIncrements('id')->unsigned();

        $table->unsignedBigInteger('raza_id');
        $table->unsignedBigInteger('color_id');
        $table->unsignedBigInteger('especie_id');
        $table->unsignedBigInteger('dueno_id');


        $table->unsignedBigInteger('codigo');
        $table->string('nombre', 50);
        $table->string('edad', 5);
        $table->date('f_nac', 50);
        $table->string('sitio', 50);
        $table->string('rescate', 50);

        $table->timestamps();
        $table->softDeletes();


        $table->foreign('raza_id')->references('id')->on('raza');
        $table->foreign('color_id')->references('id')->on('color');
        $table->foreign('especie_id')->references('id')->on('especie');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
