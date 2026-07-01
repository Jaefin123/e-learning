<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->string('id_assignment')->primary();
            $table->string('id_dosen');
            $table->string('id_matkul');
            $table->string('title');
            $table->text('deskripsi')->nullable();
            $table->string('lampiran_tugas')->nullable();
            $table->dateTime('tenggat_waktu')->nullable();
            $table->timestamps();

            $table->foreign('id_dosen')->references('id_dosen')->on('dosens')->cascadeOnDelete();
            $table->foreign('id_matkul')->references('id_matkul')->on('matkuls')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
