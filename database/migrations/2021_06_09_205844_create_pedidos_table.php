<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->decimal("importe_total",10,2);
            $table->timestamps();
        });

        Schema::table('pedidos', function (Blueprint $table){
            $table->unsignedBigInteger("idusu");
            $table->unsignedBigInteger("idcurso");
            $table->foreign("idcurso")->references("id")->on("cursos");
            $table->foreign("idusu")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
