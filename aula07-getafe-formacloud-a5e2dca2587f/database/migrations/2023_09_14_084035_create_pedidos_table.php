<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id('id');
            $table->date('fecha_pedido');
            $table->integer('unidades');
            $table->unsignedBigInteger('idcliente');
            $table->unsignedBigInteger('idproducto');
            $table->timestamps();
            $table->foreign('idcliente')->references('id')->on('clientes');
            $table->foreign('idproducto')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pedidos');
    }
};
