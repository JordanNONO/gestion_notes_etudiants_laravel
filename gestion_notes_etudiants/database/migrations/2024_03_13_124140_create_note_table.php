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
        Schema::create('note', function (Blueprint $table) {
            $table->smallInteger('id_note')->primary();
            $table->string('id_matiere', 10);
            $table->string('id_etud', 30);
            $table->smallInteger('note_cc');
            $table->smallInteger('note_normal');
            $table->string('apreciation', 126);
            $table->foreign(['id_matiere'])->references(['id_matiere'])->on('matiere');
            $table->foreign(['id_etud'])->references(['id_etud'])->on('etudiant');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('note');
    }
};
