<?php

namespace App\Models;

use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements CanResetPassword
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Primary key yang digunakan.
     */
    protected $primaryKey = 'User_ID';
    public $incrementing = true;
    protected $keyType = 'int';

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
     * Relasi ke tabel `reviews`.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class, 'user_id', 'User_ID');
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
?>