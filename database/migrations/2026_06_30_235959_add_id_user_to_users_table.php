<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (! Schema::hasColumn('users', 'id_user')) {
            Schema::table('users', function (Blueprint $table) {
                $table->uuid('id_user')->nullable()->after('id')->unique();
            });

            DB::table('users')->whereNull('id_user')->get()->each(function ($user) {
                DB::table('users')
                    ->where('id', $user->id)
                    ->update(['id_user' => Str::uuid()->toString()]);
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('users', 'id_user')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('id_user');
            });
        }
    }
};
