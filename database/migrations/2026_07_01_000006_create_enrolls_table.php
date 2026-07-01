<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('enrolls', function (Blueprint $table) {
            $table->string('id_enroll')->primary();
            $table->string('id_matkul');
            $table->string('npm');
            $table->string('id_dosen')->nullable();
            $table->string('id_admin')->nullable();
            $table->timestamps();

            $table->foreign('id_matkul')->references('id_matkul')->on('matkuls')->cascadeOnDelete();
            $table->foreign('npm')->references('npm')->on('mahasiswas')->cascadeOnDelete();
            $table->foreign('id_dosen')->references('id_dosen')->on('dosens')->nullOnDelete();
            $table->foreign('id_admin')->references('id_admin')->on('admins')->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('enrolls');
    }
};
