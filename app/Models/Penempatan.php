<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penempatan extends Model
{
    protected $fillable = [
        'siswa_id',
        'guru_id',
        'tempat_pkl_id',
        'tanggal_mulai',
        'tanggal_selesai',
        'status'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    public function tempatPkl()
    {
        return $this->belongsTo(TempatPkl::class);
    }
}