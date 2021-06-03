<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create(
            'users', function (Blueprint $table) {
                $table->id();
                $table->string('nombres');
                $table->string('apellidos');
                $table->string('email')->unique();
                $table->string('rut')->unique();
                $table->date('fecha_nac');
                $table->string('direccion');
                $table->string('comuna');
                $table->string('region');
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
