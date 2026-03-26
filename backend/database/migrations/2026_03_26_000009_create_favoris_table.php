<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('favoris', function (Blueprint $table) {
            $table->unsignedBigInteger('id_utilisateur');
            $table->unsignedBigInteger('id_activite');
            $table->timestamps();

            $table->primary(['id_utilisateur', 'id_activite']);
            $table->foreign('id_utilisateur')->references('id_utilisateur')->on('utilisateurs')->onDelete('cascade');
            $table->foreign('id_activite')->references('id_activite')->on('activite_detente')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('favoris');
    }
};
