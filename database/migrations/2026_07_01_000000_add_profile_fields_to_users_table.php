<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('npm')->nullable()->after('role');
            $table->string('nidn')->nullable()->after('npm');
            $table->string('nip')->nullable()->after('nidn');
            $table->string('prodi')->nullable()->after('nip');
            $table->string('gelar_depan')->nullable()->after('prodi');
            $table->string('gelar_belakang')->nullable()->after('gelar_depan');
            $table->string('jabatan')->nullable()->after('gelar_belakang');
            $table->string('tahun_masuk')->nullable()->after('jabatan');
            $table->string('semester')->nullable()->after('tahun_masuk');
            $table->string('image_profile')->nullable()->after('semester');
            $table->string('status')->nullable()->after('image_profile');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'npm',
                'nidn',
                'nip',
                'prodi',
                'gelar_depan',
                'gelar_belakang',
                'jabatan',
                'tahun_masuk',
                'semester',
                'image_profile',
                'status',
            ]);
        });
    }
};
