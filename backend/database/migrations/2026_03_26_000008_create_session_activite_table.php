<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('session_activite', function (Blueprint $table) {
            $table->id('id_session');
            $table->date('date_session');
            $table->string('duree_realisee', 50);
            $table->unsignedBigInteger('id_activite');
            $table->unsignedBigInteger('id_utilisateur');
            $table->timestamps();

            $table->foreign('id_activite')->references('id_activite')->on('activite_detente');
            $table->foreign('id_utilisateur')->references('id_utilisateur')->on('utilisateurs');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('session_activite');
    }
};
