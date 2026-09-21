<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class UserManagementService
{
    // Ambil semua user
    public function getAllUsers($role = null, $search = null)
    {
        return DB::table('users')
            ->leftJoin('dosen', 'users.id_user', '=', 'dosen.id_user')
            ->leftJoin('admin', 'users.id_user', '=', 'admin.id_user')
            ->leftJoin('mahasiswa', 'users.id_user', '=', 'mahasiswa.id_user')
            ->select(
                'users.id_user',
                'users.name',
                'users.email',
                'users.role',

                'dosen.gelar_depan',
                'dosen.gelar_belakang',

                DB::raw("
                    COALESCE(
                        dosen.nidn,
                        admin.nip,
                        mahasiswa.npm
                    ) AS kode_ref
                "),

                DB::raw("
                    COALESCE(
                        dosen.foto_profile,
                        admin.foto_profile,
                        mahasiswa.foto_profile
                    ) AS profile
                ")
            )

            ->when($role, function ($query) use ($role) {
                $query->where('users.role', $role);
            })

            ->when($search, function ($query) use ($search) {

                $query->where(function ($subQuery) use ($search) {

                    $subQuery
                        ->where('users.name', 'ILIKE', "%{$search}%")
                        ->orWhere(
                            DB::raw("
                                COALESCE(
                                    dosen.nidn,
                                    admin.nip,
                                    mahasiswa.npm
                                )
                            "),
                            'ILIKE',
                            "%{$search}%"
                        );
                });
            })

            ->orderByDesc('users.created_at')
            ->paginate(5)
            ->withQueryString();
    }

    // Detail user
    public function getOneUsersbyId($id)
    {
        return DB::table('users')
            ->leftJoin('dosen', 'users.id_user', '=', 'dosen.id_user')
            ->leftJoin('admin', 'users.id_user', '=', 'admin.id_user')
            ->leftJoin('mahasiswa', 'users.id_user', '=', 'mahasiswa.id_user')

            ->select(

                'users.id_user',
                'users.name',
                'users.email',
                'users.role',

                'dosen.gelar_depan',
                'dosen.gelar_belakang',

                DB::raw("
                    COALESCE(
                        dosen.nidn,
                        admin.nip,
                        mahasiswa.npm
                    ) AS kode_ref
                "),

                DB::raw("
                    COALESCE(
                        dosen.foto_profile,
                        admin.foto_profile,
                        mahasiswa.foto_profile
                    ) AS profile
                "),

                DB::raw("
                    COALESCE(
                        dosen.prodi,
                        mahasiswa.prodi
                    ) AS prodi
                "),

                'mahasiswa.tahun_masuk',
                'mahasiswa.semester',

                DB::raw("
                    COALESCE(
                        dosen.jabatan,
                        admin.jabatan
                    ) AS jabatan
                ")
            )

            ->where('users.id_user', $id)
            ->first();
    }

    // Total User
    public function getTotalUser()
    {
        return DB::table('users')->count();
    }

    // Total Dosen
    public function getTotalDosen()
    {
        return DB::table('dosen')->count();
    }

    // Total Mahasiswa
    public function getTotalMahasiswa()
    {
        return DB::table('mahasiswa')->count();
    }
}