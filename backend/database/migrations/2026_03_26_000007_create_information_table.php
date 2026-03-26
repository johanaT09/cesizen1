<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id('id_information');
            $table->string('titre_information', 50);
            $table->text('contenu_information');
            $table->date('date_publication_information');
            $table->boolean('est_actif');
            $table->unsignedBigInteger('id_categorie');
            $table->unsignedBigInteger('id_utilisateur');
            $table->timestamps();

            $table->foreign('id_categorie')->references('id_categorie')->on('categorie_activite');
            $table->foreign('id_utilisateur')->references('id_utilisateur')->on('utilisateurs');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('information');
    }
};
