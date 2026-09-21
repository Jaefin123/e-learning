<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'matkuls';
    protected $primaryKey = 'id_matkul';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_matkul',
        'nama_matkul',
        'jurusan',
        'dosen_pengampu',
        'deskripsi_matkul',
        'sks',
        'image_path',
    ];
}