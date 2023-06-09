<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absance', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("idEtudient");
            $table->foreign('idEtudient')->references('idEtudient')->on('etudients');
            $table->date('datedébut');
            $table->date('datefin');
            $table->integer('nombreheurs');
            $table->string('justifier');
            $table->string('causedabsance');
            $table->string('absanceen');
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
        Schema::dropIfExists('absance');
    }
}
