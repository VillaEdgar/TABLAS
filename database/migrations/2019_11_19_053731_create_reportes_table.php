<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reporte extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->bigIncrements('idReporte');
            $table->integer('idUsuario');
            $table->integer('idAsunto');
            $table->binary('Documento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reportes');
    }

    public function Usuario(){
        return $this->belongsTo('Usuario');
    }
    public function Asunto(){
        return $this->belongsTo('Asunto');
    }
}
