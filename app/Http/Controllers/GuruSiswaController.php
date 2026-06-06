<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Penempatan;
use Illuminate\Support\Facades\Auth;

class GuruSiswaController extends Controller
{
    public function index()
    {
        $guru = Guru::where(
            'email',
            Auth::user()->email
        )->first();

        if (!$guru) {
            abort(404, 'Data guru tidak ditemukan');
        }

        $penempatans = Penempatan::with([
            'siswa',
            'tempatPkl'
        ])
        ->where('guru_id', $guru->id)
        ->get();

        return view(
            'guru.siswa.index',
            compact('penempatans')
        );
    }
}