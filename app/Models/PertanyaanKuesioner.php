<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PertanyaanKuesioner extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori_kuesioner', 'pertanyaan',
    ];

    protected $hidden = [
    ];

    public function jawaban_kuesioners()
    {
        return $this->HasMany(JawabanKuesioner::class, 'jawaban_kuesioners_id', 'id');
    }
}
