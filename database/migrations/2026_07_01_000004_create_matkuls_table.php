<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('matkuls', function (Blueprint $table) {
            $table->string('id_matkul')->primary();
            $table->string('nama_matkul');
            $table->string('jurusan')->nullable();
            $table->string('dosen_pengampu')->nullable();
            $table->integer('sks')->nullable();
            $table->text('deskripsi_matkul')->nullable();
            $table->string('image_path')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('matkuls');
    }
};
