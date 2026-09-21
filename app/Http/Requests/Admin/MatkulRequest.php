<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class MatkulRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check() && auth()->user()->role === 'admin';
    }

    public function rules(): array
    {
        return [
            'nama_matkul' => ['required', 'string', 'max:255'],
            'jurusan' => ['required', 'string', 'max:255'],
            'dosen_pengampu' => ['required', 'string', 'max:255'],
            'deskripsi_matkul' => ['nullable', 'string'],
            'sks' => ['nullable', 'integer', 'min:0', 'max:10'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:2048'],
        ];
    }
}
