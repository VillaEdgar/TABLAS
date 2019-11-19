<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('idUsuario');
            $table->integer('idEquipo');
            $table->string('Tipo');
            $table->string('Nombre');
            $table->string('Correo');
            $table->string('Contraseña');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
    public function Reporte(){
        return $this->hasOne('Reporte');
    }
    public function Equipo(){
        return $this->belongsTo('Equipo');
    }
}
