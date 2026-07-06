<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class UsersImport implements ToModel, WithHeadingRow
{

    protected $role;
    public function __construct(string $role)
    {
        $this->role = $role;
    }

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {

        // Gunakan DB Transaction agar jika salah satu tabel gagal insert, seluruh proses dibatalkan (aman)
        DB::transaction(function () use ($row) {

            $id_user = (string) Str::uuid();

            $userData = [
                'id_user'    => $id_user,
                'name'       => $row['nama'],
                'email'      => $row['email'],
                'password'   => bcrypt($row['password']),
                'role'       => $this->role,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            // Simpan ke tabel users menggunakan Query Builder
            DB::table('users')->insert($userData);

            // 2. Cek role untuk menyimpan ke tabel relasi masing-masing
            if ($this->role === 'mahasiswa') {
                DB::table('mahasiswa')->insert([
                    'npm'          => $row['npm'],
                    'id_user'      => $id_user,
                    'prodi'        => $row['prodi'],
                    'tahun_masuk'  => $row['tahun_masuk'],
                    'semester'     => $row['semester'],
                    'created_at'   => now(),
                    'updated_at'   => now(),
                ]);
            } elseif ($this->role === 'dosen') {
                DB::table('dosen')->insert([
                    'nidn'         => $row['nidn'],
                    'id_user'      => $id_user,
                    'jabatan'      => $row['jabatan'],
                    'prodi'        => $row['prodi'],
                    'created_at'   => now(),
                    'updated_at'   => now(),
                ]);
            } else {
                DB::table('admin')->insert([
                    'nip'          => $row['nip'],
                    'id_user'      => $id_user,
                    'jabatan'      => $row['jabatan'],
                    'created_at'   => now(),
                    'updated_at'   => now(),
                ]);
            }
        });

        // Wajib return null karena proses insert sudah ditangani manual di atas
        return null;


        // return new User([
        //     'name'     => $row['nama'], // Sesuaikan dengan header CSV Anda
        //     'email'    => $row['email'],
        //     'password' => bcrypt($row['password']),
        // ]);
    }
}
