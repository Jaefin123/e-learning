<?php

namespace App\Http\Controllers\mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AssignmentsController extends Controller
{
    public function PageAssignments(Request $request): View
    {
        $page = "page-assignments";

        return view('mahasiswa.assignments', compact('page'));
    }
}
