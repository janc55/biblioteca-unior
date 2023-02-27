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
        Schema::create('tb_asignacion_mat_ests', function (Blueprint $table) 
    {
        $table->bigIncrements('id_asig_mat_est');

        $table->unsignedBigInteger('id_asig_mat');
        $table->unsignedBigInteger('id_est');
        
        $table->float('eval_p1');
        $table->float('eval_p2');
        $table->float('eval_fin');
        $table->float('eval_2t');    
        $table->string('obs_asig');     
        $table->timestamps();

        $table->foreign('id_asig_mat')->reference('id_asig_mat')->on('tb_asignacion_mats');
        $table->foreign('id_est')->reference('id_est')->on('tb_estudiantes');
      
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
        Schema::dropIfExists('tb_asignacion_mat_ests');
    }
};
