<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
             Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('roll',1);
             $table->string('autorizado',1);
            $table->string('email',60)->unique();
            $table->string('usuario',60);
            $table->string('password',80);   
            $table->string('nombre',60);
            $table->string('apellido',40);
            $table->string('empresa',60);
            $table->string('direccion',60);
            $table->string('telefono',12);  
            $table->string('dui',12);
            $table->string('nit',20);
            $table->string('fecha',20);
            $table->string('cliente',20);


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
}
