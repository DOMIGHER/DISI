<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('idCliente');
            $table->string('nombre',30);
            $table->string('apellidoPaterno',20);
            $table->string('apellidoMaterno',20);
            $table->string('rfc', 13);
            $table->string('telefono');
            $table->string('correo')->unique();
            $table->string('direccion');
            $table->integer('idProducto')->unsigned();
            $table->foreign('idProducto')->references('idProducto')->on('productos');
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
        Schema::dropIfExists('clientes');
    }
}
