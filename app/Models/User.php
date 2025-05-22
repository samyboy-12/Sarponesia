<?php

namespace App\Models;

use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements CanResetPassword
{
    use HasFactory, Notifiable;

    /**
     * Primary key yang digunakan.
     */
    protected $primaryKey = 'User_ID';
    public $incrementing = true; // Pastikan auto-increment jika perlu
    protected $keyType = 'int'; // Pastikan tipe datanya

    /**
     * Atribut yang dapat diisi secara massal.
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    /**
     * Relasi ke tabel `reviews` (asumsi Anda punya tabel `reviews`).
     */
    public function reviews()
    {
        return $this->hasMany(Review::class, 'User_ID', 'User_ID');
    }

    /**
     * Atribut yang disembunyikan saat serialisasi.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Atribut yang harus dikonversi ke tipe data tertentu.
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Mengambil peran pengguna.
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Mengecek apakah pengguna adalah admin.
     */
    public function isAdmin()
    {
        return $this->role === 'admin';
    }
}
