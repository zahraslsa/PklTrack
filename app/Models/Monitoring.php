<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
    protected $fillable = [
        'siswa_id',
        'tanggal',
        'kegiatan'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}