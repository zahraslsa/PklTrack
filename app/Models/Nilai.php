<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $fillable = [
        'siswa_id',
        'disiplin',
        'kerjasama',
        'inisiatif',
        'tanggung_jawab',
        'nilai_akhir'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}