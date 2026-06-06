<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuruLaporanController extends Controller
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

        $laporans = Laporan::with('siswa')
            ->whereHas('siswa.penempatan', function ($query) use ($guru) {
                $query->where('guru_id', $guru->id);
            })
            ->latest()
            ->get();

        return view(
            'guru.laporan.index',
            compact('laporans')
        );
    }

    public function approve($id)
    {
        $laporan = Laporan::findOrFail($id);

        $laporan->status = 'approved';
        $laporan->catatan_guru = null;
        $laporan->save();

        return redirect('/guru/laporan')
            ->with('success', 'Laporan berhasil disetujui');
    }

    public function reject(Request $request, $id)
    {
        $laporan = Laporan::findOrFail($id);

        $laporan->status = 'rejected';
        $laporan->catatan_guru = $request->catatan_guru;
        $laporan->save();

        return redirect('/guru/laporan')
            ->with('success', 'Laporan berhasil direject');
    }
}