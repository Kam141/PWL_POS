<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuplierModel extends Model
{
    use HasFactory;
    protected $table = 'm_suplier';  
    protected $primaryKey = 'id';  

    protected $fillable = ['id', 'nama_suplier', 'kontak', 'alamat'];
}
