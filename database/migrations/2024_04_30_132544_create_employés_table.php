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
        Schema::create('employés', function (Blueprint $table) {
            $table->id();
            $table->string('Nom_emp');
            $table->string('Sexe');
            $table->integer('Age');
            $table->string('Tel');
            $table->string('Ville');
            $table->string('AdrPhysique_emp');
            $table->string('email')->unique();
            $table->string('Type_emp');
            $table->string('Specialite_emp');
            $table->string('password');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employés');
    }
};
