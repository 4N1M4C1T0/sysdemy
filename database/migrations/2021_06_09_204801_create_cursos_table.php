<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre_curso",40);
            $table->string("biografia_curso",1000);
            $table->string("imagen")->nullable();
            $table->decimal("precio",10,2);
            $table->timestamps();
        });

        Schema::table('cursos', function (Blueprint $table){
            $table->unsignedBigInteger("idusu");
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
        Schema::dropIfExists('cursos');
    }
}
