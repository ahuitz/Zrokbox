<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
             $table->increments('idproducto');
             $table->string('nombreProducto');
             $table->double('precio');
             $table->string('descripcion');
             $table->integer('idcategoria')->unsigned();
             $table->foreign('idcategoria')
                ->references('idcategoria')
                ->on('categorias')
                ->onDelete('cascade');   
             $table->integer('idpresentacion')->unsigned();
             $table->foreign('idpresentacion')
                ->references('idpresentacion')
                ->on('presentaciones')
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
        Schema::drop('productos');
    }
}
