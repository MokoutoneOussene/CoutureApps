<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('prenom2');
            $table->string('sexe');
            $table->string('pere');
            $table->string('mere');
            $table->string('situation');
            $table->string('conjoint');
            $table->string('telephone');
            $table->string('email');
            $table->string('date_naiss');
            $table->string('statut');
            $table->string('quartier');
            $table->string('pays');
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
        Schema::dropIfExists('infos');
    }
}
