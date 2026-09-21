<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function editAkun(Request $request, $id)
    {
        $idAsli = decrypt($id);

        $user = DB::table('users')
            ->where('id_user', $idAsli)
            ->first();

        if (!$user) {
            abort(404);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $idAsli . ',id_user',
        ]);

        DB::table('users')
            ->where('id_user', $idAsli)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);

        if ($user->role === 'dosen') {

            $request->validate([
            'jabatan' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
            'nidn' => 'required|string|max:255',
            'gelar_depan' => 'nullable|string|max:255',
            'gelar_belakang' => 'nullable|string|max:255',
        ]);

            DB::table('dosen')
            ->where('id_user', $idAsli)
            ->update([
                'jabatan' => $request->jabatan,
                'prodi' => $request->prodi,
                'nidn' => $request->nidn,
                'gelar_depan' => $request->gelar_depan,
                'gelar_belakang' => $request->gelar_belakang,
            ]);

        } elseif ($user->role === 'admin') {

            $request->validate([
                'jabatan' => 'required|string|max:255',
                'nip' => 'required|string|max:255',
            ]);

            DB::table('admin')
                ->where('id_user', $idAsli)
                ->update([
                    'jabatan' => $request->jabatan,
                    'nip' => $request->nip,
                ]);

        } else {

            $request->validate([
                'prodi' => 'required|string|max:255',
                'npm' => 'required|string|max:255',
            ]);

            DB::table('mahasiswa')
                ->where('id_user', $idAsli)
                ->update([
                    'prodi' => $request->prodi,
                    'npm' => $request->npm,
                    'semester' => $request->semester,
                    'tahun_masuk' => $request->tahun_masuk,
                ]);
        }
        // dd($request->all()); // Debugging: Check the incoming request data

        // return back()->with('berhasil', 'Profile updated successfully.');
        return back()->with(['berhasil' => 'Profile berhasil diupdate.']);
    }
        public function updatePhoto(Request $request): RedirectResponse
        {
            $request->validate([
                'image_profile' => [
                    'required',
                    'image',
                    'mimes:jpg,jpeg,png',
                    'max:2048',
                ],
            ]);

            $user = $request->user();

            $path = $request->file('image_profile')->store('profile', 'public');

            if ($user->role === 'dosen') {
                DB::table('dosen')
                    ->where('id_user', $user->id_user)
                    ->update([
                        'foto_profile' => $path,
                    ]);
            } elseif ($user->role === 'admin') {
                DB::table('admin')
                    ->where('id_user', $user->id_user)
                    ->update([
                        'foto_profile' => $path,
                    ]);
            } else {
                DB::table('mahasiswa')
                    ->where('id_user', $user->id_user)
                    ->update([
                        'foto_profile' => $path,
                    ]);
            }

            return back()->with('berhasil', 'Foto profile berhasil diupdate.');
        }
}
