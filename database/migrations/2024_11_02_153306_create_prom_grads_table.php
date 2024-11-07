<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromGradsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prom_grads', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->unsigned();   // Make sure it is unsigned
            $table->bigInteger('id_grade')->unsigned();  // Make sure it is unsigned
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
        Schema::dropIfExists('prom_grads');
    }
}
