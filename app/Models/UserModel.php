<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable; //implementasi class Authenticatable

class UserModel extends Authenticatable
{
    use HasFactory;

    protected $table = 'm_user'; //mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'user_id'; //mendefinisaikan pk dari tabel yang digunakan
    
    protected $fillable = ['level_id', 'username', 'name', 'password', 'profile_photo','created_at', 'updated_at'];
    // protected $fillable = ['level_id', 'username', 'name'];

    protected $hidden = ['password']; //jangan ditampilkan pada saat select

    protected $casts = ['password' => 'hashed']; //casting password agar otomatis di hash
    public function level(): BelongsTo
    {
        return $this->belongsto(LevelModel::class, 'level_id', 'level_id');
    }
    public function getRoleName(): string
    {
        return $this->level->level_nama;
    }

    public function hasRole($role): bool
    {
        return $this->level->level_kode == $role;
    }
    public function getRole()
    {
        return $this->level->level_kode;
    }
}
