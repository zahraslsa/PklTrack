<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = [
        'nip',
        'nama',
        'email',
        'no_hp'
    ];

    public function penempatans()
    {
        return $this->hasMany(Penempatan::class);
    }
}