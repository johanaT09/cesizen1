<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id('id_utilisateur');
            $table->string('prenom', 50);
            $table->date('date_naissance');
            $table->string('email', 50)->unique();
            $table->string('mot_de_passe', 255);
            $table->dateTime('consentement_rgpd');
            $table->boolean('est_actif');
            $table->dateTime('date_anonymisation')->nullable();
            $table->unsignedBigInteger('id_genre');
            $table->unsignedBigInteger('id_role');
            $table->timestamps();

            $table->foreign('id_genre')->references('id_genre')->on('genre_utilisateur');
            $table->foreign('id_role')->references('id_role')->on('roles');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
    }
};
