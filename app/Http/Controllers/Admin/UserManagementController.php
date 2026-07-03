<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\UserManagementService;
use Illuminate\Support\Carbon;

class UserManagementController extends Controller
{
    protected $userManagementService;

    public function __construct(UserManagementService $userManagementService)
    {
        $this->userManagementService = $userManagementService;
    }

    // page user management
    public function pageUserManagement(Request $request)
    {

        $role = $request->session()->get('user_role_filter');
        $search = $request->session()->get('user_search_filter');

        // dd ($role, $search); // Debugging: Check the retrieved role and search values

        $users = $this->userManagementService->getAllUsers($role, $search);
        $totalDosen = $this->userManagementService->getTotalDosen();
        $totalMahasiswa = $this->userManagementService->getTotalMahasiswa();
        $totalUsers = $this->userManagementService->getTotalUser();

        // dd($users); // Debugging: Check the retrieved users

        $page = 'page-usermanagement';
        return view('admin.usermanagement', compact('page', 'users', 'role', 'search', 'totalDosen', 'totalMahasiswa', 'totalUsers'));
    }

    // handle filter role
    public function filterRole(Request $request)
    {
        $role = $request->input('role');
        $request->session()->put('user_role_filter', $role);

        return back();
    }

    // handle search
    public function filterSearch(Request $request)
    {
        $search = $request->input('search');
        $request->session()->put('user_search_filter', $search);

        return back();
    }

    // handle create akun
    public function createAkun(Request $request)
    {
        // dd($request->all()); // Debugging: Check the incoming request data

        try {
            //code...
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|max:12',
                'role' => 'required|in:mahasiswa,dosen,admin',
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with(['gagal' => $th->getMessage()]);
        }

        // Additional validation based on role
        if ($request->role === 'mahasiswa') {
            $request->validate([
                'mahasiswa_npm' => 'required|string|max:12',
            ]);

            $tahunMasuk = (int)$request->mahasiswa_tahun_masuk;
            $tahunSekarang = Carbon::now()->year;
            $bulanSekarang = Carbon::now()->month;

            $tambahanSemester = ($bulanSekarang >= 8 || $bulanSekarang == 1) ? 1 : 0;
            $semester = (2 * ($tahunSekarang - $tahunMasuk)) + $tambahanSemester;

            $id_user = uuid_create(); // Generate a unique ID for the user

            try {
                DB::beginTransaction();
                DB::table('users')->insert([
                    'id_user' => $id_user,
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'role' => $request->role,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                DB::table('mahasiswa')->insert([
                    'npm' => $request->mahasiswa_npm,
                    'id_user' => $id_user,
                    'prodi' => $request->mahasiswa_prodi,
                    'tahun_masuk' => $request->mahasiswa_tahun_masuk,
                    'semester' => $semester,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                DB::commit();

                return back()->with(['berhasil' => 'Akun mahasiswa berhasil dibuat.']);
            } catch (\Throwable $th) {
                //throw $th;
                DB::rollBack();
                return back()->with(['gagal' => 'Terjadi kesalahan saat membuat akun mahasiswa.']);
            }
        } elseif ($request->role === 'dosen') {

            try {
                $request->validate([
                    'dosen_nidn' => 'required|string|max:12',
                ]);
            } catch (\Throwable $th) {
                //throw $th;
                return back()->with(['gagal' => $th->getMessage()]);
            }


            $id_user = uuid_create(); // Generate a unique ID for the user

            try {
                DB::beginTransaction();
                DB::table('users')->insert([
                    'id_user' => $id_user,
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'role' => $request->role,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                DB::table('dosen')->insert([
                    'nidn' => $request->dosen_nidn,
                    'id_user' => $id_user,
                    'gelar_depan' => $request->gelar_depan,
                    'gelar_belakang' => $request->gelar_belakang,
                    'prodi' => $request->dosen_prodi,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                DB::commit();

                return back()->with(['berhasil' => 'Akun dosen berhasil dibuat.']);
            } catch (\Exception $e) {
                DB::rollBack();
                // Handle the exception, e.g., log it or return an error response
                return back()->with(['gagal' => 'Terjadi kesalahan saat membuat akun dosen.']);
            }
        } elseif ($request->role === 'admin') {

            try {
                $request->validate([
                    'admin_nip' => 'required|string|max:12',
                ]);
            } catch (\Throwable $th) {
                //throw $th;
                return back()->with(['gagal' => $th->getMessage()]);
            }

            $id_user = uuid_create(); // Generate a unique ID for the user

            try {
                DB::beginTransaction();
                
                DB::table('users')->insert([
                    'id_user' => $id_user,
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'role' => $request->role,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                DB::table('admin')->insert([
                    'nip' => $request->admin_nip,
                    'id_user' => $id_user,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                DB::commit();

                return back()->with(['berhasil' => 'Akun admin berhasil dibuat.']);
            } catch (\Exception $e) {
                DB::rollBack();
                // Handle the exception, e.g., log it or return an error response
                return back()->with(['gagal' => 'Terjadi kesalahan saat membuat akun admin.']);
            }
        }
    }
}
