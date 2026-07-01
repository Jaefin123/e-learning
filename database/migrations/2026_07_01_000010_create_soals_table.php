<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('soals', function (Blueprint $table) {
            $table->string('id_soal')->primary();
            $table->string('id_kuis');
            $table->text('pertanyaan');
            $table->string('tipe_soal')->nullable();
            $table->integer('score')->nullable();
            $table->timestamps();

            $table->foreign('id_kuis')->references('id_kuis')->on('kuis')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('soals');
    }
};
