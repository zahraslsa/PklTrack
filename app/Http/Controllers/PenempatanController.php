<?php

namespace App\Http\Controllers;

use App\Models\Penempatan;
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\TempatPkl;
use Illuminate\Http\Request;

class PenempatanController extends Controller
{
    public function index()
    {
        $penempatans = Penempatan::with([
            'siswa',
            'guru',
            'tempatPkl'
        ])->get();

        return view('admin.penempatan.index', compact('penempatans'));
    }

    public function create()
    {
        $siswas = Siswa::all();
        $gurus = Guru::all();
        $tempatPkls = TempatPkl::all();

        return view('admin.penempatan.create', compact(
            'siswas',
            'gurus',
            'tempatPkls'
        ));
    }

    public function store(Request $request)
    {
        Penempatan::create($request->all());

        return redirect('/penempatan');
    }

    public function edit($id)
    {
        $penempatan = Penempatan::findOrFail($id);

        $siswas = Siswa::all();
        $gurus = Guru::all();
        $tempatPkls = TempatPkl::all();

        return view('admin.penempatan.edit', compact(
            'penempatan',
            'siswas',
            'gurus',
            'tempatPkls'
        ));
    }

    public function update(Request $request, $id)
    {
        $penempatan = Penempatan::findOrFail($id);

        $penempatan->update($request->all());

        return redirect('/penempatan');
    }

    public function destroy($id)
    {
        $penempatan = Penempatan::findOrFail($id);

        $penempatan->delete();

        return redirect('/penempatan');
    }
}