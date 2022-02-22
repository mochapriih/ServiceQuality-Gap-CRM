<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Keluhan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori_keluhan', 'deskripsi_keluhan','status', 'laporan','users_id',
    ];

    protected $hidden = [
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

}