<?php

use App\Http\Controllers\mahasiswa\CourseController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswa\AssignmentsController;
use App\Http\Controllers\mahasiswa\GradesController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\UserManagementController;
use App\Services\UserManagementService;

Route::get('/', function () {
    return view('guest.landingpage');
})->name('landingpage');

Route::get('mahasiswa/dashboard', function () {

    if (Auth::user()->role !== 'mahasiswa') {
        return redirect()->route('look'); // Lempar ke rute dosen jika dia bukan mahasiswa
    }

    $page = "page-dashboard";
    return view('mahasiswa.dashboard', compact('page'));
    
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('dosen/dashboard', function () {

    if (Auth::user()->role !== 'dosen') {
        return redirect()->route('admin.dashboard'); // Lempar ke rute mahasiswa jika dia bukan dosen
    }

    $page = 'page-dashboard';

    return view('dosen.dashboard', compact('page'));

})->middleware(['auth', 'verified'])->name('look');

// admin
Route::get('admin/dashboard', function () {

    if (Auth::user()->role !== 'admin') {
        return redirect()->route('dashboard'); // Lempar ke rute mahasiswa jika dia bukan dosen
    }

    $page = 'page-dashboard';

    return view('admin.dashboard', compact('page'));

})->middleware(['auth', 'verified'])->name('admin.dashboard');

// ========================================================= semua user yg login ====================================================
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// ================================================ hanya mahasiswa yg akses ====================================================
Route::middleware(['auth', 'role:mahasiswa'])->prefix('mahasiswa')->group(function () {
    Route::get('dashboard/course', [CourseController::class, 'PageCourse'])->name('course.page.mhs');
    Route::get('dashboard/assignments', [AssignmentsController::class, 'PageAssignments'])->name('assignments.page.mhs');
    Route::get('dashboard/grades', [GradesController::class, 'PageGrades'])->name('grades.page.mhs');

});

// ========================================================= hanya dosen yg akses ====================================================
Route::middleware(['auth', 'role:dosen'])->prefix('dosen')->group(function () {
    Route::get('/course-management', function () {
        $page = 'page-coursemanagement';
        return view('dosen.coursemanagement', compact('page'));
    })->name('coursemanagement');
    
    Route::get('/grading', function () {
        $page = 'page-grading';
        return view('dosen.grading', compact('page'));
    })->name('grading');

    Route::get('/qr-absensi', function () {
        $page = 'page-qrabsensi';
        return view('dosen.pageQrAbsensi', compact('page'));
    })->name('qrabsensi');

});

// ========================================================= hanya admin yg akses ====================================================
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/course-managementadmin', function () {
        $page = 'page-coursemanagementadmin';
        return view('admin.coursemanagement', compact('page'));
    })->name('coursemanagementadmin');
    
    // page user management
    Route::get('/user-management', [UserManagementController::class, 'pageUserManagement'])->name('usermanagementadmin');
    // handle filter role
    Route::get('/user-management/filter/role', [UserManagementController::class, 'filterRole'])->name('usermanagementadmin.filter.role');
    // handle filter search
    Route::get('/user-management/filter/search', [UserManagementController::class, 'filterSearch'])->name('usermanagementadmin.filter.search');
    // handle create akun di user management
    Route::post('/user-management/create-akun', [UserManagementController::class, 'createAkun'])->name('usermanagementadmin.create.akun');
    // hadle delete akun di user management
    Route::delete('/user-management/delete-akun/{id}', [UserManagementController::class, 'deleteAkun'])->name('usermanagementadmin.delete.akun');

    // page detail profil user management
    Route::get('/user-management/detail-akun/{id}', [UserManagementController::class, 'detailProfil'])->name('usermanagementadmin.detail.profil');
    // handle update profil
    Route::patch('/user-management/update-akun/{id}', [UserManagementController::class, 'updateProfil'])->name('usermanagementadmin.update.profil');
    // handle import profil
    Route::post('/user-management/import-akun', [UserManagementController::class, 'importProfil'])->name('usermanagementadmin.import.profil');

});


Route::middleware('auth')->group(function () {
    Route::get('/profile-saya', function (UserManagementService $UserManagementService) {

        $id = Auth::user()->id_user; // Ambil data user yang sedang login

        // dd($auth); // Debugging: Check the retrieved user ID
        $user =  $UserManagementService->getOneUsersbyId($id);

        $page = 'page-profile';
        return view('profile', compact('page', 'user'));
    })->name('profile.saya');

    Route::post('/edit-profile/{id}', [ProfileController::class, 'editAkun'])->name('akun.edit');

    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

// Route::middleware(['auth', 'role:mahasiswa'])->get('/mahasiswa', function () {
//     return view('mahasiswa.course');
// })->name('mahasiswa/courses');

// Route::middleware(['auth', 'role:admin'])->get('/admin', function () {
//     return 'Admin Page';
// });

require __DIR__.'/auth.php';
