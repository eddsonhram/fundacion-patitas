<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Trabajador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('trabajador', function(Blueprint $table){
        $table->engine = 'InnoDB';
        
        $table->bigIncrements('id')->unsigned();
        $table->unsignedBigInteger('cedula');
        $table->string('nombre', 50);
        $table->string('edad', 5);
        $table->string('direccion', 50);
        $table->string('rol', 50);
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
        //
    }
}
