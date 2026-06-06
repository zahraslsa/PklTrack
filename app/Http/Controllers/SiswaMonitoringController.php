<?php

namespace App\Http\Controllers;

use App\Models\Monitoring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaMonitoringController extends Controller
{
    public function index()
    {
        $siswa = Auth::user()->siswa;

        $monitorings = Monitoring::where(
            'siswa_id',
            $siswa->id
        )->latest()->get();

        return view(
            'siswa.monitoring.index',
            compact('monitorings')
        );
    }

    public function create()
    {
        return view('siswa.monitoring.create');
    }

    public function store(Request $request)
    {
        $siswa = Auth::user()->siswa;

        Monitoring::create([
            'siswa_id' => $siswa->id,
            'tanggal' => $request->tanggal,
            'kegiatan' => $request->kegiatan,
        ]);

        return redirect('/siswa/monitoring')
            ->with('success', 'Jurnal berhasil ditambahkan');
    }
}