<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user'; //mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'user_id'; //mendefinisaikan pk dari tabel yang digunakan

    protected $fillable = ['level_id', 'username', 'name', 'password'];
    // protected $fillable = ['level_id', 'username', 'name'];

    public function level(): BelongsTo
    {
        return $this->belongsto(LevelModel::class, 'level_id', 'level_id');
    }
}
