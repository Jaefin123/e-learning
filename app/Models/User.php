<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable, HasUuids;
    // use HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */

    // Tulis baris ini untuk memberi tahu Laravel bahwa primary key Anda adalah id_user
    protected $primaryKey = 'id_user';

    // Jika id_user Anda bukan angka auto-increment (misal: UUID string), tambahkan ini:
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'npm',
        'nidn',
        'nip',
        'prodi',
        'gelar_depan',
        'gelar_belakang',
        'jabatan',
        'tahun_masuk',
        'semester',
        'image_profile',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
