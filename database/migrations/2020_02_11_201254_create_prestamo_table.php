<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamo', function (Blueprint $table) {
            $table->bigIncrements('idPrestamo');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('idUser')->on('user');
            $table->unsignedBigInteger('id_libro');
            $table->foreign('id_libro')->references('idLibro')->on('libros');
            $table->integer('dias');
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
        Schema::dropIfExists('prestamo');
    }
}
