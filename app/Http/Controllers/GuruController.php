<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::all();

        return view('admin.guru.index', compact('gurus'));
    }

    public function create()
    {
        return view('admin.guru.create');
    }

    public function store(Request $request)
    {
        Guru::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
        ]);

        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'guru',
        ]);

        return redirect('/guru')
            ->with('success', 'Data guru dan akun login berhasil ditambahkan');
    }

    public function edit($id)
    {
        $guru = Guru::findOrFail($id);

        return view('admin.guru.edit', compact('guru'));
    }

    public function update(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);

        $emailLama = $guru->email;

        $guru->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
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

        return redirect('/guru')
            ->with('success', 'Data guru berhasil diperbarui');
    }

    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);

        User::where('email', $guru->email)->delete();

        $guru->delete();

        return redirect('/guru')
            ->with('success', 'Data guru dan akun login berhasil dihapus');
    }
}

