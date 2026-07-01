<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hasil_kuis', function (Blueprint $table) {
            $table->string('id_hasil')->primary();
            $table->string('id_kuis');
            $table->uuid('id_mahasiswa');
            $table->dateTime('start_at')->nullable();
            $table->dateTime('submitted_at')->nullable();
            $table->integer('total_score')->nullable();
            $table->timestamps();

            $table->foreign('id_kuis')->references('id_kuis')->on('kuis')->cascadeOnDelete();
            $table->foreign('id_mahasiswa')->references('id_user')->on('users')->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hasil_kuis');
    }
};
