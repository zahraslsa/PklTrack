<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;
use App\Models\Nilai;
use App\Models\Guru;

class GuruNilaiController extends Controller
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

        $siswas = Siswa::with('nilai')
            ->whereHas('penempatan', function ($query) use ($guru) {
                $query->where('guru_id', $guru->id);
            })
            ->get();

        return view('guru.nilai.index', compact('siswas'));
    }

    public function create($id)
    {
        $guru = Guru::where(
            'email',
            Auth::user()->email
        )->first();

        if (!$guru) {
            abort(404, 'Data guru tidak ditemukan');
        }

        $siswa = Siswa::with('nilai')
            ->whereHas('penempatan', function ($query) use ($guru) {
                $query->where('guru_id', $guru->id);
            })
            ->findOrFail($id);

        // Cegah input ulang jika sudah ada nilai
        if ($siswa->nilai) {
            abort(403, 'Siswa sudah memiliki nilai');
        }

        return view('guru.nilai.create', compact('siswa'));
    }

    public function store(Request $request)
    {
        $guru = Guru::where(
            'email',
            Auth::user()->email
        )->first();

        if (!$guru) {
            abort(404, 'Data guru tidak ditemukan');
        }

        $siswa = Siswa::with('nilai')
            ->whereHas('penempatan', function ($query) use ($guru) {
                $query->where('guru_id', $guru->id);
            })
            ->findOrFail($request->siswa_id);

        // Cegah simpan jika sudah ada nilai
        if ($siswa->nilai) {
            abort(403, 'Siswa sudah memiliki nilai');
        }

        $nilaiAkhir = (
            $request->disiplin +
            $request->kerjasama +
            $request->inisiatif +
            $request->tanggung_jawab
        ) / 4;

        Nilai::create([
            'siswa_id' => $siswa->id,
            'disiplin' => $request->disiplin,
            'kerjasama' => $request->kerjasama,
            'inisiatif' => $request->inisiatif,
            'tanggung_jawab' => $request->tanggung_jawab,
            'nilai_akhir' => $nilaiAkhir
        ]);

        return redirect('/guru/nilai')
            ->with('success', 'Nilai berhasil disimpan');
    }
}