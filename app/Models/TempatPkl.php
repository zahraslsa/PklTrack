<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TempatPkl extends Model
{
    protected $fillable = [
        'nama_tempat',
        'alamat',
        'pembimbing_lapangan',
        'no_telp',
        'kuota',
        'status'
    ];
}