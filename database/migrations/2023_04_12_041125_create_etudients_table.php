<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudients', function (Blueprint $table) {
            $table->id('idEtudient');
            $table->string('nom');
            $table->string('prenom');
            $table->string('dateNaissance');
            $table->string('télephone');
            $table->string('filliere');
            $table->string('groupe');
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
        Schema::dropIfExists('etudients');
    }
}
