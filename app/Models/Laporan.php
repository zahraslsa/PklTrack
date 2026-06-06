<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $fillable = [
        'siswa_id',
        'email',
        'judul',
        'file_laporan',
        'status',
        'catatan_guru'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}