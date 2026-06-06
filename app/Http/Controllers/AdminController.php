<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Guru;
use App\Models\TempatPkl;
use App\Models\Penempatan;
use App\Models\Laporan;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard', [

            'jumlahSiswa' => Siswa::count(),

            'jumlahGuru' => Guru::count(),

            'jumlahTempatPkl' => TempatPkl::count(),

            'jumlahPenempatan' => Penempatan::count(),

            'jumlahLaporan' => Laporan::count(),

        ]);
    }
}