<?php

namespace App\Http\Controllers\mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function PageCourse(Request $request): View
    {
        $page = "page-course";

        return view('mahasiswa.course', compact('page'));
    }
}
