<?php

namespace App\Http\Controllers\mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GradesController extends Controller
{
    public function PageGrades(Request $request): View
    {
        $page = "page-grades";

        return view('mahasiswa.grades', compact('page'));
    }
}
