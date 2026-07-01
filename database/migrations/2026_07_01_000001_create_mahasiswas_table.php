<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->string('id_mahasiswa')->primary();
            $table->unsignedBigInteger('id_user');
            $table->string('npm')->unique();
            $table->string('tahun_masuk')->nullable();
            $table->string('semester')->nullable();
            $table->string('prodi')->nullable();
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
