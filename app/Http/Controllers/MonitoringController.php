<?php

namespace App\Http\Controllers;

use App\Models\Monitoring;
use App\Models\Siswa;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function index()
    {
        $monitorings = Monitoring::with('siswa')->get();

        return view(
            'admin.monitoring.index',
            compact('monitorings')
        );
    }

    public function create()
    {
        $siswas = Siswa::all();

        return view(
            'admin.monitoring.create',
            compact('siswas')
        );
    }

    public function store(Request $request)
    {
        Monitoring::create([
            'siswa_id' => $request->siswa_id,
            'tanggal' => $request->tanggal,
            'kegiatan' => $request->kegiatan
        ]);

        return redirect('/monitoring');
    }

    public function destroy($id)
    {
        Monitoring::findOrFail($id)->delete();

        return redirect('/monitoring');
    }
}