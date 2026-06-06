<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::all();

        return view('admin.siswa.index', compact('siswas'));
    }

    public function create()
    {
        return view('admin.siswa.create');
    }

    public function store(Request $request)
    {
        Siswa::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
        ]);

        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'siswa',
        ]);

        return redirect('/siswa')
            ->with('success', 'Data siswa dan akun login berhasil ditambahkan');
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);

        return view('admin.siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);

        $emailLama = $siswa->email;

        $siswa->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
        ]);

        $user = User::where('email', $emailLama)->first();

        if ($user) {

            $user->name = $request->nama;
            $user->email = $request->email;

            if ($request->filled('password')) {

                $user->password = Hash::make(
                    $request->password
                );

            }

            $user->save();
        }

        return redirect('/siswa')
            ->with('success', 'Data siswa berhasil diperbarui');
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);

        User::where('email', $siswa->email)->delete();

        $siswa->delete();

        return redirect('/siswa')
            ->with('success', 'Data siswa dan akun login berhasil dihapus');
    }
}
