<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->string('nidn')->primary();
            $table->uuid('id_user');
            $table->text('foto_profile')->nullable();
            $table->string('prodi')->nullable();
            $table->string('gelar_depan')->nullable();
            $table->string('gelar_belakang')->nullable();
            $table->string('jabatan')->nullable();
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('users')->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dosen');
    }
};
