<?php

namespace App\Http\Controllers\mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function PageCourse(Request $request): View
{
    $page = "page-course";

    $idMahasiswa = Auth::user()->id_user;

    $courses = DB::table('enrolls')
        ->join('matkuls', 'enrolls.id_matkul', '=', 'matkuls.id_matkul')
        ->where('enrolls.id_mahasiswa', $idMahasiswa)
        ->select('matkuls.*')
        ->orderBy('matkuls.nama_matkul')
        ->get();

    return view('mahasiswa.course', compact(
        'page',
        'courses'
    ));
}
}
