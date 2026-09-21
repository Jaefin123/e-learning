<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('matkuls', function (Blueprint $table) {
            $table->string('dosen_pengampu')->after('jurusan')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('matkuls', function (Blueprint $table) {
            $table->dropColumn('dosen_pengampu');
        });
    }
};
