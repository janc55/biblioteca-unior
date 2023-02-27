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
        //
        Schema::create('tb_asignacion_mats', function (Blueprint $table) 
    {
        $table->bigIncrements('id_asig_mat');
  
        $table->unsignedBigInteger('id_doc');
        $table->unsignedBigInteger('id_carre');
        
        $table->unsignedBigInteger('id_materia');
        $table->unsignedBigInteger('id_turno');
        $table->unsignedBigInteger('id_gestion');
        $table->string('paralelo_asig_mat');
        $table->string('tipo_asig_mat');     
        $table->string('obs_asig_mat');     
        $table->timestamps();

         $table->foreign('id_carre')->reference('id_carre')->on('tb_carreras');
         $table->foreign('id_doc')->reference('id_doc')->on('tb_docentes');
      
        $table->foreign('id_materia')->reference('id_materia')->on('tb_materias');
        $table->foreign('id_turno')->reference('id_turno')->on('tb_turnos');
        $table->foreign('id_gestion')->reference('id_gestion')->on('tb_gestiones');

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('tb_asignacion_mats');
    }
};
