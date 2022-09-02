<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadesEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades_eventos', function (Blueprint $table) {
            $table->id();
            $table->foreignId ('actividad_id')->references('id')->on('actividades');
            $table->string ('fechaInicio', 255);
            $table->string ('fechaTermino', 255);
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
        Schema::dropIfExists('actividades_eventos');
    }
}
