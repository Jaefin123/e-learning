<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $primaryKey = 'npm';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'npm',
        'id_user',
        'foto_profile',
        'tahun_masuk',
        'semester',
        'prodi',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}