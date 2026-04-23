<?php

use App\Http\Controllers\mahasiswa\CourseController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswa\AssignmentsController;
use App\Http\Controllers\mahasiswa\GradesController;

Route::get('/', function () {
    return view('guest.landingpage');
});

Route::get('/dashboard', function () {

    $page = "page-dashboard";
    return view('mahasiswa.dashboard', compact('page'));
    
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/course', [CourseController::class, 'PageCourse'])->name('course.page');
    Route::get('/assignments', [AssignmentsController::class, 'PageAssignments'])->name('assignments.page');
    Route::get('/grades', [GradesController::class, 'PageGrades'])->name('grades.page');
    
});


Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::middleware(['auth', 'role:mahasiswa'])->get('/mahasiswa', function () {
    return view('mahasiswa.course');
})->name('mahasiswa/courses');

Route::middleware(['auth', 'role:admin'])->get('/admin', function () {
    return 'Admin Page';
});

require __DIR__.'/auth.php';
