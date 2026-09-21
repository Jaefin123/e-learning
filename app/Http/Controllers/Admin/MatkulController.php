<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Matkul;
use App\Http\Requests\Admin\MatkulRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MatkulController extends Controller
{
    public function index(Request $request)
    {
        $page = 'page-coursemanagementadmin';
        $search = $request->input('search');

        $matkuls = Matkul::query();

        if ($search) {
            $matkuls->where(function ($query) use ($search) {
                $query->where('nama_matkul', 'ilike', "%{$search}%")
                    ->orWhere('jurusan', 'ilike', "%{$search}%")
                    ->orWhere('dosen_pengampu', 'ilike', "%{$search}%");
            });
        }

        $matkuls = $matkuls->orderBy('nama_matkul')->paginate(5)->withQueryString();

        return view('admin.coursemanagement', compact('matkuls', 'page', 'search'));
    }

    public function create()
    {
        return view('admin.matkuls.create');
    }

    public function store(MatkulRequest $request)
    {
        $data = [
            'id_matkul' => Str::uuid()->toString(),
            'nama_matkul' => $request->nama_matkul,
            'jurusan' => $request->jurusan,
            'dosen_pengampu' => $request->dosen_pengampu,
            'deskripsi_matkul' => $request->deskripsi_matkul,
            'sks' => $request->sks,
        ];

        if ($request->hasFile('image')) {

            $data['image_path'] = $request
                ->file('image')
                ->store('matkul_images', 'public');
        }

        Matkul::create($data);

        return redirect()->route('coursemanagementadmin')
            ->with('success', 'Mata kuliah berhasil dibuat.');
    }

    public function edit(Matkul $matkul)
    {
        return view('admin.matkuls.edit', compact('matkul'));
    }

    public function update(MatkulRequest $request, Matkul $matkul)
    {
        $data = $request->validated();
        $data['dosen_pengampu'] = $request->dosen_pengampu;

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('matkul_images', 'public');
        }

        $matkul->update($data);

        return redirect()->route('admin.matkuls.index')
            ->with('success', 'Mata kuliah berhasil diperbarui.');
    }

    public function destroy(Matkul $matkul)
    {
        $matkul->delete();

        return redirect()->route('admin.matkuls.index')
            ->with('success', 'Mata kuliah berhasil dihapus.');
    }

    public function updateDetail(Request $request, $id_matkul)
{
    $request->validate([
        'nama_matkul' => ['required', 'string', 'max:255'],
        'jurusan' => ['required', 'string', 'max:255'],
        'sks' => ['nullable', 'integer'],
        'dosen_pengampu' => ['nullable', 'string', 'max:255'],
        'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        'kapasitas' => ['nullable', 'integer'],
        'deskripsi_matkul' => ['nullable', 'string'],
    ]);

    $matkul = Matkul::where('id_matkul', $id_matkul)->firstOrFail();

    $data = [
        'nama_matkul' => $request->nama_matkul,
        'jurusan' => $request->jurusan,
        'sks' => $request->sks,
        'dosen_pengampu' => $request->dosen_pengampu,
        'kapasitas' => $request->kapasitas,
        'deskripsi_matkul' => $request->deskripsi_matkul,
    ];

    // Jika Admin memilih gambar baru
    if ($request->hasFile('image')) {

        // Simpan gambar baru terlebih dahulu
        $newImagePath = $request
            ->file('image')
            ->store('matkul_images', 'public');

        // Hapus gambar lama jika ada
        if ($matkul->image_path) {
            Storage::disk('public')->delete($matkul->image_path);
        }

        // Simpan path gambar baru
        $data['image_path'] = $newImagePath;
    }

    $matkul->update($data);

    return redirect()
        ->route('admin.course.detail', $matkul->id_matkul)
        ->with('success', 'Data mata kuliah berhasil diperbarui.');
}

    public function show($id_matkul)
    {
        $page = 'page-coursemanagementadmin';

        $matkul = Matkul::where('id_matkul', $id_matkul) ->first();

    abort_if(!$matkul, 404);

    $enrolledStudents = DB::table('enrolls')
    ->join('mahasiswa', 'enrolls.id_mahasiswa', '=', 'mahasiswa.id_user')
    ->join('users', 'mahasiswa.id_user', '=', 'users.id_user')
    ->where('enrolls.id_matkul', $id_matkul)
    ->select(
        'users.name',
        'users.email',
        'mahasiswa.id_user',
        'mahasiswa.prodi',
        'mahasiswa.npm',
        'enrolls.created_at'
    )
    ->get();

    $availableStudents = DB::table('mahasiswa')
    ->join('users', 'mahasiswa.id_user', '=', 'users.id_user')
    ->where('users.role', 'mahasiswa')
    ->whereNotIn('mahasiswa.id_user', function ($query) use ($id_matkul) {
        $query->select('id_mahasiswa')
            ->from('enrolls')
            ->where('id_matkul', $id_matkul);
    })
    ->select(
        'users.name',
        'users.email',
        'mahasiswa.id_user',
        'mahasiswa.npm',
        'mahasiswa.prodi'
    )
    ->orderBy('users.name')
    ->get();

    return view('admin.course.coursedetail', compact(
        'page',
        'matkul',
        'enrolledStudents',
        'availableStudents'
    ));
    }

    public function enrollStudent(Request $request, $id_matkul)
{
    $request->validate([
        'id_mahasiswa' => ['required', 'array'],
        'id_mahasiswa.*' => ['exists:mahasiswa,id_user'],
    ]);

    $idAdmin = auth()->user()->id_user;

    foreach ($request->id_mahasiswa as $idMahasiswa) {
        $alreadyEnrolled = DB::table('enrolls')
            ->where('id_matkul', $id_matkul)
            ->where('id_mahasiswa', $idMahasiswa)
            ->exists();

        if (! $alreadyEnrolled) {
            DB::table('enrolls')->insert([
                'id_enroll' => (string) Str::uuid(),
                'id_matkul' => $id_matkul,
                'id_mahasiswa' => $idMahasiswa,
                'id_admin' => $idAdmin,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    return back()->with('success', 'Mahasiswa berhasil ditambahkan ke mata kuliah.');
}


}