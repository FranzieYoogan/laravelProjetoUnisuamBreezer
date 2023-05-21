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
        Schema::create('vagas_abertas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('vagas_nome');
            $table->string('local');
            $table->integer('vagas_quantidade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vagas_abertas');
    }
};
