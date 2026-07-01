<?php

namespace database\seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat akun Admin
        User::create([
            'name' => 'Admin LMS',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // Membuat akun Dosen
        User::create([
            'name' => 'Dr. Dosen, M.T.',
            'email' => 'dosen@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'),
            'role' => 'dosen',
        ]);

        // Membuat akun Mahasiswa
        User::create([
            'name' => 'Test User Mahasiswa',
            'email' => 'test@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'),
            'role' => 'mahasiswa',
        ]);
    }
}
