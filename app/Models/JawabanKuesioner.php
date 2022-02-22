<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanKuesioner extends Model
{
    use HasFactory;

    protected $fillable = [
        'ekspektasi', 'persepsi', 'pertanyaan_kuesioners_id', 'users_id',
    ];

    protected $hidden = [
    ];

    public function pertanyaan_kuesioners()
    {
        return $this->belongsTo(PertanyaanKuesioner::class, 'pertanyaan_kuesioners_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
