<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;
use App\Models\Penempatan;
use App\Models\Laporan;
use App\Models\Nilai;

class SiswaDashboardController extends Controller
{
    public function index()
    {
        $siswa = Siswa::where(
            'email',
            Auth::user()->email
        )->first();

        if (!$siswa) {
            abort(404, 'Data siswa tidak ditemukan');
        }

        $penempatan = Penempatan::with([
            'guru',
            'tempatPkl'
        ])
        ->where('siswa_id', $siswa->id)
        ->first();

        $laporan = Laporan::where(
            'siswa_id',
            $siswa->id
        )->latest()->first();

        $nilai = Nilai::where(
            'siswa_id',
            $siswa->id
        )->first();

        return view(
            'siswa.dashboard',
            compact(
                'siswa',
                'penempatan',
                'laporan',
                'nilai'
            )
        );
    }
}