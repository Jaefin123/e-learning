<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        $admin = User::create([
            'name' => 'Admin LMS',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        DB::table('admin')->insert([
            'nip' => 'ADM001',
            'id_user' => $admin->id_user,
            'foto_profile' => null,
            'jabatan' => 'Administrator LMS',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Dosen
        $dosen = User::create([
            'name' => 'Dr. Dosen, M.T.',
            'email' => 'dosen@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'),
            'role' => 'dosen',
        ]);

        DB::table('dosen')->insert([
            'nidn' => 'DSN001',
            'id_user' => $dosen->id_user,
            'foto_profile' => null,
            'prodi' => 'Teknik Komputer',
            'gelar_depan' => 'Dr.',
            'gelar_belakang' => 'M.T.',
            'jabatan' => 'Dosen Pengampu',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Mahasiswa
        $mahasiswa = User::create([
            'name' => 'Test User Mahasiswa',
            'email' => 'test@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'),
            'role' => 'mahasiswa',
        ]);

        DB::table('mahasiswa')->insert([
            'npm' => '765432',
            'id_user' => $mahasiswa->id_user,
            'foto_profile' => null,
            'tahun_masuk' => '2025',
            'semester' => '1',
            'prodi' => 'Teknik Komputer',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}