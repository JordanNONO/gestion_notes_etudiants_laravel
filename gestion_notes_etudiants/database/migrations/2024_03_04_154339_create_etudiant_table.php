<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('etudiant', function (Blueprint $table) {
            $table->string('id_etud', 30)->primary();
            $table->string('nom_etud', 126);
            $table->string('prenom_etud', 126)->nullable();
            $table->string('sexe_etud', 20);
            $table->string('age_etud',20);
            $table->string('lieu_naissance', 126);
            $table->string('email_etud', 126)->nullable();
            $table->string('email_parent', 126);
            $table->string('adresse_etud', 126);
            $table->string('tel_etud', 20);
            $table->smallInteger('annee_etud')->default(2024);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiant');
    }
};
