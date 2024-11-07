<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('matricule');
            $table->string('nom_fr');
            $table->string('prenom_fr');
            $table->string('nom_ar');
            $table->string('prenom_ar');
            $table->string('cin')->unique();
            $table->string('doti')->unique();
            $table->date('date_naissance');
            $table->date('date_retraite')->nullable();
            $table->date('date_affectation');
            $table->date('date_recrutement');
            $table->string('telephone')->nullable();
            $table->string('email_personnel')->nullable();
            $table->string('email_professionnel')->nullable();
            $table->string('adresse')->nullable();
            $table->enum('sexe', ['M', 'F']); 
            $table->bigInteger('id_role');
            $table->bigInteger('id_specialite');
            $table->bigInteger('id_etbalissment');
            $table->softDeletes(); 
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
        Schema::dropIfExists('users');
    }
}
