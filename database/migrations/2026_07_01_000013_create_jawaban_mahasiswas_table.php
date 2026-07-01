<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jawaban_mahasiswas', function (Blueprint $table) {
            $table->string('id_jawaban')->primary();
            $table->string('id_hasil');
            $table->string('id_soal');
            $table->text('jawaban');
            $table->float('score')->nullable();
            $table->timestamps();

            $table->foreign('id_hasil')->references('id_hasil')->on('hasil_kuis')->nullOnDelete();
            $table->foreign('id_soal')->references('id_soal')->on('soals')->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jawaban_mahasiswas');
    }
};
