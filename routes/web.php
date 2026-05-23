<?php

use App\Http\Controllers\mahasiswa\CourseController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswa\AssignmentsController;
use App\Http\Controllers\mahasiswa\GradesController;
use Illuminate\Support\Facades\Auth;

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
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

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
    
    Route::get('/user-management', function () {
        $page = 'page-usermanagement';
        return view('admin.usermanagement', compact('page'));
    })->name('usermanagementadmin');

});



// Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

// Route::middleware(['auth', 'role:mahasiswa'])->get('/mahasiswa', function () {
//     return view('mahasiswa.course');
// })->name('mahasiswa/courses');

// Route::middleware(['auth', 'role:admin'])->get('/admin', function () {
//     return 'Admin Page';
// });

require __DIR__.'/auth.php';
