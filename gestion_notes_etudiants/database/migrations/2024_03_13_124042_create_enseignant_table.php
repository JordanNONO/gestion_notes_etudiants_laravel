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
        Schema::create('enseignant', function (Blueprint $table) {
            $table->string('matricule', 10)->primary();
            $table->string('id_matiere', 10);
            $table->string('nom_ens', 126);
            $table->string('prenom_ens')->nullable();
            $table->string('mail_ens')->nullable();
            $table->string('adresse_ens');
            $table->string('tel_ens', 20);
            $table->foreign(['id_matiere'])->references(['id_matiere'])->on('matiere');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enseignant');
    }
};
