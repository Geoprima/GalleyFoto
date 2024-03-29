<?php

namespace App\Models;

use App\Models\Foto;
use App\Models\Like;
use App\Models\Komentar;
use App\Models\Trigerlogin;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_lengkap',
        'username',
        'alamat',
        'picture',
        'email',
        'password',
    ];
    


    //relasi ke foto sudah umpan balik
    public function fotos()
    {
        return $this->hasMany(Foto::class, 'user_id', 'id');
    }
    //relasi ke komentar sudah umpan balik
    public function comments()
    {
        return $this->hasMany(Komentar::class, 'user_id', 'id');
    }
    //relasi ke like sudah umpan balik
    public function likefotos()
    {
        return $this->hasMany(Like::class, 'user_id', 'id');
    }
    public function trigerlogin()
    {
        return $this->hasMany(Trigerlogin::class, 'id_user', 'id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
