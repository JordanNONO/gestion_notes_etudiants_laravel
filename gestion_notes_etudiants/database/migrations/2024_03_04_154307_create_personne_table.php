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
        Schema::create('personne', function (Blueprint $table) {
            $table->string('id_pers', 10)->primary();
            $table->string('nom_pers', 126);
            $table->string('prenom_pers', 126);
            $table->string('email_pers', 126)->nullable();
            $table->string('adresse_pers', 126);
            $table->string('tel_pers', 126);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personne');
    }
};
