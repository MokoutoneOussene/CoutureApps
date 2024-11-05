<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesurs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('epaule')->nullable();
            $table->integer('poitrine')->nullable();
            $table->integer('lng_manche')->nullable();
            $table->integer('tour_manche')->nullable();
            $table->integer('lng_chemise')->nullable();
            $table->integer('ceinture')->nullable();
            $table->integer('bassin')->nullable();
            $table->integer('cuisse')->nullable();
            $table->integer('poignet')->nullable();
            $table->integer('poignet2')->nullable();
            $table->integer('lng_pantalon')->nullable();
            $table->integer('tour_taille')->nullable();
            $table->integer('long_taille')->nullable();
            $table->integer('lng_camisole')->nullable();
            $table->integer('log_jupe')->nullable();
            $table->integer('genoux')->nullable();
            $table->integer('bas')->nullable();
            $table->integer('col')->nullable();
            $table->integer('dos')->nullable();
            $table->integer('pince')->nullable();
            $table->integer('long_robe')->nullable();
            $table->date('date')->nullable();

            $table->Integer('id_client')->unsigned();
            $table->foreign('id_client')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('mesurs');
    }
}
