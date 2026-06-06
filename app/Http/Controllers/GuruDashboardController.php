<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Guru;
use App\Models\Penempatan;
use App\Models\Monitoring;
use App\Models\Laporan;
use App\Models\Nilai;

class GuruDashboardController extends Controller
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

        $siswaBimbingan = Penempatan::with('siswa')
            ->where('guru_id', $guru->id)
            ->get();

        return view('guru.dashboard', [

            'jumlahSiswa' => $siswaBimbingan->count(),

            'jumlahMonitoring' => Monitoring::count(),

            'jumlahLaporan' => Laporan::count(),

            'jumlahNilai' => Nilai::count(),

            'siswaBimbingan' => $siswaBimbingan

        ]);
    }
}