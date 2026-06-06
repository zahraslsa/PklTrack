<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $laporans = Laporan::orderBy('created_at', 'desc')->get();

        return view('admin.laporan.index', compact('laporans'));
    }

    public function destroy($id)
    {
        $laporan = Laporan::findOrFail($id);

        $laporan->delete();

        return redirect('/laporan')
            ->with('success', 'Laporan berhasil dihapus');
    }

    // 🔥 APPROVE LAPORAN
    public function approve($id)
    {
        $laporan = Laporan::findOrFail($id);

        $laporan->status = 'approved';
        $laporan->save();

        return redirect('/laporan')
            ->with('success', 'Laporan disetujui');
    }

    // 🔥 REJECT LAPORAN
    public function reject($id)
    {
        $laporan = Laporan::findOrFail($id);

        $laporan->status = 'rejected';
        $laporan->save();

        return redirect('/laporan')
            ->with('success', 'Laporan ditolak');
    }
}