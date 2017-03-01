<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsisteReunionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asiste_reuniones', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_celula');
            $table->unsignedInteger('id_discipulo');
            $table->string('fecha');
            $table->boolean('asistencia')->nullable() ;                    
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
        Schema::dropIfExists('asiste_reuniones');
    }
}
