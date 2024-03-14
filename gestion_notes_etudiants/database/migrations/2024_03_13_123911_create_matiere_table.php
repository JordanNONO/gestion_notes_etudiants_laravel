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
        Schema::create('matiere', function (Blueprint $table) {
            $table->string('id_matiere', 10)->primary();
            $table->string('id_module', 10);
            $table->string('id_etud', 30);
            $table->string('intitule', 126);
            $table->smallInteger('credit_mat')->default(2);
            $table->string('vh_mat')->default('30');
            $table->foreign(['id_module'])->references(['id_module'])->on('module');
            $table->foreign(['id_etud'])->references(['id_etud'])->on('etudiant');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matiere');
    }
};
