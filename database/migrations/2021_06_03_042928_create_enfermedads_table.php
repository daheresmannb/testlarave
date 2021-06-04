<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnfermedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create(
            'enfermedads', 
            function (Blueprint $table) {
                $table->id();
                $table->string("nombre_enfermedad");
                $table->unsignedBigInteger("usuario_id");
                $table->unsignedBigInteger("infermedad_clase_id");
                $table->string("detalle");

                $table->foreign('usuario_id')
                ->references('id')
                ->on('users');
                $table->foreign('infermedad_clase_id')
                ->references('id')
                ->on('enfermedad_clases');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('enfermedads');
    }
}
