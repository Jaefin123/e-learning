<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->string('id_submission')->primary();
            $table->string('id_assignment');
            $table->string('npm');
            $table->string('lampiran_tugas')->nullable();
            $table->string('nilai')->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();

            $table->foreign('id_assignment')->references('id_assignment')->on('assignments')->cascadeOnDelete();
            $table->foreign('npm')->references('npm')->on('users')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('submissions');
    }
};
