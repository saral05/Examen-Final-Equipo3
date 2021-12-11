<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id_estudiante');
            $table->integer('matricula');
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            
            //llaves foraneas
             $table->unsignedBigInteger('salon_id');
             $table->foreign('salon_id')->references('id_salon')->on('salones');
            // // $table->string('nombre');
            $table->unsignedBigInteger('materias_id');
            $table->foreign('materias_id')->references('id')->on('materias');
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
        Schema::dropIfExists('students');
    }
}
