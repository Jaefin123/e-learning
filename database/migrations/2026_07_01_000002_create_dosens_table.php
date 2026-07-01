<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->string('id_dosen')->primary();
            $table->unsignedBigInteger('id_user');
            $table->string('nidn')->unique();
            $table->string('prodi')->nullable();
            $table->string('gelar_depan')->nullable();
            $table->string('gelar_belakang')->nullable();
            $table->string('jabatan')->nullable();
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dosens');
    }
};
