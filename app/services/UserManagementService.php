<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class UserManagementService
{
    // ambil data semua user dengan filternya 
    public function getAllUsers($role, $search)
    {
        $Users = DB::table('users')
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
                DB::raw("COALESCE(dosen.nidn, admin.nip, mahasiswa.npm) as kode_ref"),
                DB::raw("COALESCE(dosen.foto_profile, admin.foto_profile, mahasiswa.foto_profile) as profile"),
            )
            ->where(function ($query) use ($role) {
                if (!is_null($role) && $role !== 'null' && $role !== '') {
                    $query->where('users.role', $role);
                } else {
                    // Jika null, ambil semua user dengan role berikut
                    $query->whereIn('users.role', ['mahasiswa', 'dosen', 'admin']);
                }
            })
            ->when($search, function ($query, $search) {
                $query->where(function ($subQuery) use ($search) {
                    $subQuery->where('users.name', 'ILIKE', "%{$search}%")
                        ->orWhere(DB::raw("COALESCE(dosen.nidn, admin.nip, mahasiswa.npm)"), 'ILIKE', "%{$search}%");
                });
            })
            ->paginate(5)
            ->withQueryString();

        return $Users;
    }

    // ambil data satu user byid
    public function getOneUsersbyId($id)
    {
        $Users = DB::table('users')
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
                DB::raw("COALESCE(dosen.nidn, admin.nip, mahasiswa.npm) as kode_ref"),
                DB::raw("COALESCE(dosen.foto_profile, admin.foto_profile, mahasiswa.foto_profile) as profile"),
                DB::raw("COALESCE(dosen.prodi, mahasiswa.prodi) as prodi"),
                DB::raw("COALESCE(mahasiswa.tahun_masuk) as tahun_masuk"),
                DB::raw("COALESCE(mahasiswa.semester) as semester"),
                DB::raw("COALESCE(dosen.jabatan, admin.jabatan) as jabatan"),
            )
            ->where('users.id_user', $id)
            ->first();

        return $Users;
    }
    // ambil total user
    public function getTotalUser(){
        $totalUsers = DB::table('users')->count();
        return $totalUsers;
    }
    // ambil total dosen
    public function getTotalDosen(){
        $totalDosen = DB::table('dosen')->count();
        return $totalDosen;
    }
    // ambil total mahasiswa
    public function getTotalMahasiswa(){
        $totalMahasiswa = DB::table('mahasiswa')->count();
        return $totalMahasiswa;
    }
}
