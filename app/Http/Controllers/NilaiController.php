<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilais = Nilai::with('siswa')->get();

        return view('admin.nilai.index', compact('nilais'));
    }

    public function create()
    {
        $siswas = Siswa::all();

        return view('admin.nilai.create', compact('siswas'));
    }

    public function store(Request $request)
    {
        $nilaiAkhir = (
            $request->disiplin +
            $request->kerjasama +
            $request->inisiatif +
            $request->tanggung_jawab
        ) / 4;

        Nilai::create([
            'siswa_id' => $request->siswa_id,
            'disiplin' => $request->disiplin,
            'kerjasama' => $request->kerjasama,
            'inisiatif' => $request->inisiatif,
            'tanggung_jawab' => $request->tanggung_jawab,
            'nilai_akhir' => $nilaiAkhir
        ]);

        return redirect('/nilai');
    }

    public function destroy($id)
    {
        Nilai::findOrFail($id)->delete();

        return redirect('/nilai');
    }
}