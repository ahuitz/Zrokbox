<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaImagenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagenes', function (Blueprint $table) {
            $table->increments('idimagenes');
            $table->string('direccion');
            $table->integer('idproducto')->unsigned();
             $table->foreign('idproducto')
                ->references('idproducto')
                ->on('productos')
                ->onDelete('cascade');   
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
        Schema::drop('imagenes');
    }
}
