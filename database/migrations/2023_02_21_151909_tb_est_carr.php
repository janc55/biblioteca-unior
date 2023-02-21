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
        Schema::create('tb_est_carr', function (Blueprint $table) {
            $table->bigIncrements('id_est_carr');
            $table->unsignedBigInteger('id_est');
            $table->unsignedBigInteger('id_carre');
            $table->unsignedBigInteger('id_turno');
            $table->unsignedBigInteger('id_pl');
            $table->date('fec_de_inicio');
            $table->date('fec_de_fin');
            // $table->foreign('id_tipo')->reference('id')->on('tipo');

            $table->timestamps();

            $table->foreign('id_est')->reference('id_est')->on('tb_estudiantes');
            $table->foreign('id_carre')->reference('id_carre')->on('tb_carreras');
            $table->foreign('id_turno')->reference('id_turno')->on('tb_turnos');
            $table->foreign('id_pl')->reference('id_pl')->on('tbplanes');

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
        Schema::drop('tb_est_carr');
    }
};
