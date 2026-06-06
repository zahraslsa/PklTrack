<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Guru;
use App\Models\Monitoring;

class GuruMonitoringController extends Controller
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

        $monitorings = Monitoring::with('siswa')
            ->whereHas('siswa.penempatan', function ($query) use ($guru) {
                $query->where('guru_id', $guru->id);
            })
            ->latest()
            ->get();

        return view(
            'guru.monitoring.index',
            compact('monitorings')
        );
    }
}