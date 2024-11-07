<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromCadresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prom_cadres', function (Blueprint $table) {
            $table->id();
  // Make sure it is unsigned
            $table->bigInteger('id_user')->unsigned(); ; 
            $table->bigInteger('id_cadre')->unsigned(); ; 
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
        Schema::dropIfExists('prom_cadres');
    }
}
