<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    use HasFactory;
    protected $fillable = [
        'rekening', 'ktp', 'telepon', 'nama','jenis_kelamin','tanggal_lahir', 'pekerjaan', 'alamat', 'nama_ibu', 'nama_pasangan', 
        'produk', 'saldo', 'tanggal'
    ];

    protected $hidden = [
    ];
}
