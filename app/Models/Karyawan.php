<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'ktp', 'telepon','jenis_kelamin', 'email', 'alamat', 'jabatan'
    ];

    protected $hidden = [
    ];
  

}
