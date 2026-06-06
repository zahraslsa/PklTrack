<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'nis',
        'nama',
        'kelas',
        'jurusan',
        'email',
        'no_hp'
    ];

    public function penempatan()
    {
        return $this->hasOne(Penempatan::class);
    }

    public function monitorings()
    {
        return $this->hasMany(Monitoring::class);
    }

    public function nilai()
    {
        return $this->hasOne(Nilai::class);
    }

    public function laporans()
    {
        return $this->hasMany(Laporan::class);
    }
}