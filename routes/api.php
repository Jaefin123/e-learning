<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CourseController;

Route::post('/login', [AuthController::class, 'login']);

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{id}', [CourseController::class, 'show']);

Route::post('/courses/{id}/enroll', [CourseController::class, 'enroll']);