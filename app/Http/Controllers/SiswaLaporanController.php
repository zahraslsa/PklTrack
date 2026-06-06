<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Laporan;

class SiswaLaporanController extends Controller
{
    public function index()
    {
        $email = Auth::user()->email;

        // semua riwayat (kalau mau ditampilkan)
        $laporan = Laporan::where('email', $email)
            ->latest()
            ->get();

        // laporan terakhir (untuk rule upload)
        $latest = Laporan::where('email', $email)
            ->latest()
            ->first();

        return view('siswa.laporan', compact('laporan', 'latest'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'file_laporan' => 'required|mimes:pdf|max:2048'
        ]);

        $email = Auth::user()->email;

        // 🔥 ambil data siswa dari email
        $siswa = \App\Models\Siswa::where('email', $email)->first();

        if (!$siswa) {
            abort(404, 'Data siswa tidak ditemukan');
        }

        $file = $request->file('file_laporan');
        $namaFile = time().'_'.$file->getClientOriginalName();

        if (!file_exists(public_path('laporan'))) {
            mkdir(public_path('laporan'), 0777, true);
        }

        $file->move(public_path('laporan'), $namaFile);

        Laporan::create([
            'siswa_id' => $siswa->id,   // 🔥 FIX UTAMA
            'email' => $email,
            'judul' => $request->judul,
            'file_laporan' => $namaFile,
            'status' => 'pending'
        ]);

        return redirect('/siswa/laporan')
            ->with('success', 'Laporan berhasil diupload');
    }
}