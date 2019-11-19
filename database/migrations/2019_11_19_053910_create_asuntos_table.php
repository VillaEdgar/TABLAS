<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Asunto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asuntos', function (Blueprint $table) {
            $table->bigIncrements('idAsunto');
            $table->string('Tipo');
            $table->integer('idArea');
            $table->string('Estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asuntos');
    }

    public function Reportes(){
        return $this->hasMany('Reporte');
    }
    public function Areas(){
        return $this->belongsToMany('Area');
    }
}
