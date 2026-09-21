<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Alter the sessions table user_id column from bigint to uuid
        DB::statement('ALTER TABLE sessions ALTER COLUMN user_id TYPE uuid USING NULL::uuid');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Revert back to bigint if needed
        DB::statement('ALTER TABLE sessions ALTER COLUMN user_id TYPE bigint USING NULL::bigint');
    }
};
