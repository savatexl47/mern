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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('imagen')->nullable();
            $table->boolean('estado')->default(1);
            
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->string('direccion')->nullable();
            $table->string('tipo')->nullable();
            $table->integer('dni')->nullable();
            $table->string('sexo')->nullable();
            $table->integer('edad')->nullable();
            $table->integer('movil')->nullable();
            $table->date('fecha_nacimiento')->nullable();

            $table->string('nro_cuenta')->nullable();
            $table->string('banco')->nullable();
            $table->string('cci')->nullable();
            $table->date('fecha_voucher')->nullable();
            
            $table->string('sueño')->nullable();
            $table->string('voucher')->nullable();
            $table->string('declaju')->nullable();
            $table->string('foto_dni')->nullable();
            
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
