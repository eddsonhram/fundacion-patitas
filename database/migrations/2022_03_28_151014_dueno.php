<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dueno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dueno', function(Blueprint $table){
        $table->engine = 'InnoDB';
        $table->bigIncrements('id')->unsigned();
        
        
        $table->unsignedBigInteger('trabajador_id');
        $table->unsignedBigInteger('animal_id');

        $table->unsignedBigInteger('cedula');
        $table->string('nombre', 50);
        $table->string('edad', 5);
        $table->string('direccion', 50);
        $table->timestamps();
        $table->softDeletes();

        
        $table->foreign('trabajador_id')->references('id')->on('trabajador');
        $table->foreign('animal_id')->references('id')->on('animal');
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
