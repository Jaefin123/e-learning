<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kuis', function (Blueprint $table) {
            $table->string('id_kuis')->primary();
            $table->string('id_dosen');
            $table->string('id_matkul');
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->dateTime('waktu_mulai')->nullable();
            $table->dateTime('waktu_selesai')->nullable();
            $table->integer('durasi')->nullable();
            $table->timestamps();

            $table->foreign('id_dosen')->references('id_dosen')->on('dosens')->cascadeOnDelete();
            $table->foreign('id_matkul')->references('id_matkul')->on('matkuls')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kuis');
    }
};
