<?php

use App\Http\Controllers\mahasiswa\CourseController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswa\AssignmentsController;
use App\Http\Controllers\mahasiswa\GradesController;

Route::get('/', function () {
    return view('guest.landingpage');
})->name('landingpage');

Route::get('/dashboard', function () {

    if (auth()->user()->role !== 'mahasiswa') {
        return redirect()->route('look'); // Lempar ke rute dosen jika dia bukan mahasiswa
    }

    $page = "page-dashboard";
    return view('mahasiswa.dashboard', compact('page'));
    
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/look', function () {

    if (auth()->user()->role !== 'dosen') {
        return redirect()->route('admin.dashboard'); // Lempar ke rute mahasiswa jika dia bukan dosen
    }

    $page = 'page-dashboard';

    return view('dosen.dashboard', compact('page'));

})->middleware(['auth', 'verified'])->name('look');

// admin
Route::get('/admin-dashboard', function () {

    if (auth()->user()->role !== 'admin') {
        return redirect()->route('dashboard'); // Lempar ke rute mahasiswa jika dia bukan dosen
    }

    $page = 'page-dashboard';

    return view('admin.dashboard', compact('page'));

})->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/course', [CourseController::class, 'PageCourse'])->name('course.page');
    Route::get('/assignments', [AssignmentsController::class, 'PageAssignments'])->name('assignments.page');
    Route::get('/grades', [GradesController::class, 'PageGrades'])->name('grades.page');

    // doen ====================================================
    Route::get('/coursemanagement', function () {
        $page = 'page-coursemanagement';
        return view('dosen.coursemanagement', compact('page'));
    })->name('coursemanagement');
    
    Route::get('/grading', function () {
        $page = 'page-grading';
        return view('dosen.grading', compact('page'));
    })->name('grading');

    // atmin ====================================================
    Route::get('/coursemanagementadmin', function () {
        $page = 'page-coursemanagementadmin';
        return view('admin.coursemanagement', compact('page'));
    })->name('coursemanagementadmin');
    
    Route::get('/usermanagement', function () {
        $page = 'page-usermanagement';
        return view('admin.usermanagement', compact('page'));
    })->name('usermanagementadmin');
    
});

// Route::middleware(['auth', 'auth.role:dosen'])->group(function () {
   
//     Route::get('/coursemanagement', function () {
//         return view('dosen.coursemanagement');
//     })->name('coursemanagement');
    
//     Route::get('/grading', function () {
//             return view('dosen.grading');
//     })->name('grading');



    
// });

// Route::middleware(['auth', 'auth.role:admin'])->group(function () {
   
//     Route::get('/coursemanagementadmin', function () {
//         return view('admin.coursemanagement');
//     })->name('coursemanagement');
    
//     Route::get('/usermanagement', function () {
//             return view('admin.usermanagement');
//     })->name('usermanagement');

    
// });


Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::middleware(['auth', 'role:mahasiswa'])->get('/mahasiswa', function () {
    return view('mahasiswa.course');
})->name('mahasiswa/courses');

Route::middleware(['auth', 'role:admin'])->get('/admin', function () {
    return 'Admin Page';
});

require __DIR__.'/auth.php';
