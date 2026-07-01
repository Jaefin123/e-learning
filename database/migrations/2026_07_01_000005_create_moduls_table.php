<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('moduls', function (Blueprint $table) {
            $table->string('id_modul')->primary();
            $table->string('id_matkul');
            $table->string('title_modul');
            $table->string('file_modul')->nullable();
            $table->timestamps();

            $table->foreign('id_matkul')->references('id_matkul')->on('matkuls')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('moduls');
    }
};
