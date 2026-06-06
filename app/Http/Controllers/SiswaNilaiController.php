<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;
use App\Models\Nilai;

class SiswaNilaiController extends Controller
{
    public function index()
    {
        $email = Auth::user()->email;

        $siswa = Siswa::where('email', $email)->first();

        if (!$siswa) {
            return redirect()->back()
                ->with('error', 'Data siswa tidak ditemukan');
        }

        $nilai = Nilai::where('siswa_id', $siswa->id)->first();

        return view('siswa.nilai', compact('nilai'));
    }
}