<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('activite_detente', function (Blueprint $table) {
            $table->id('id_activite');
            $table->string('titre_activite', 50);
            $table->text('contenu_activite');
            $table->integer('duree_estimee');
            $table->boolean('est_actif');
            $table->unsignedBigInteger('id_type');
            $table->unsignedBigInteger('id_categorie');
            $table->timestamps();

            $table->foreign('id_type')->references('id_type')->on('types');
            $table->foreign('id_categorie')->references('id_categorie')->on('categorie_activite');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activite_detente');
    }
};
