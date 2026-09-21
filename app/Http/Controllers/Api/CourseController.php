<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Matkul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Matkul::all();

        return response()->json([
            'data' => $courses
        ], 200);
    }

    public function show($id)
    {
        $course = Matkul::find($id);

        if (!$course) {
            return response()->json([
                'message' => 'Course tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'data' => $course
        ], 200);
    }

    public function enroll(Request $request, $id)
    {
        // kode enroll di atas
    }
}