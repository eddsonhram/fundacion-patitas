<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Historial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial', function(Blueprint $table){
        $table->engine = 'InnoDB';
        $table->bigIncrements('id')->unsigned();

        
        $table->unsignedBigInteger('trabajador_id');
        $table->unsignedBigInteger('vacunas_id');
        $table->unsignedBigInteger('animal_id');


        $table->string('evolucion', 50);
        $table->string('cuidados', 50);
        $table->timestamps();
        $table->softDeletes();


        $table->foreign('trabajador_id')->references('id')->on('trabajador');
        $table->foreign('vacunas_id')->references('id')->on('vacunas');
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
