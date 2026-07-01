<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('opsi_jawabans', function (Blueprint $table) {
            $table->string('id_opsi')->primary();
            $table->string('id_soal');
            $table->text('teks_jawaban');
            $table->boolean('is_correct')->default(false);
            $table->timestamps();

            $table->foreign('id_soal')->references('id_soal')->on('soals')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('opsi_jawabans');
    }
};
