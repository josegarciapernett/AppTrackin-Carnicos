<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransportaAlimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transporta__alimentos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('fecha');
            $table->integer('vehiculo_id')->unsigned();
            
            $table->integer('empresa_cliente_id')->unsigned();
           
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
        Schema::dropIfExists('transporta__alimentos');
    }
}
