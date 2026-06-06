@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-2">
    Data Siswa
</h1>

<p class="text-gray-600 mb-8">
    Kelola seluruh data siswa PKL.
</p>

<div class="mb-4">

    <a href="/siswa/create"
       class="inline-block bg-[#0078D7] text-white border border-black px-4 py-2 hover:brightness-95">

        + Tambah Siswa

    </a>

</div>

<div class="border border-black bg-white">

    <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

        DAFTAR SISWA

    </div>

    <div class="p-4 overflow-x-auto">

        <table class="w-full">

            <thead>

                <tr class="border-b border-black">

                    <th class="text-left py-3">No</th>
                    <th class="text-left py-3">NIS</th>
                    <th class="text-left py-3">Nama</th>
                    <th class="text-left py-3">Kelas</th>
                    <th class="text-left py-3">Jurusan</th>
                    <th class="text-left py-3">Email</th>
                    <th class="text-left py-3">No HP</th>
                    <th class="text-left py-3">Aksi</th>

                </tr>

            </thead>

            <tbody>

                @foreach ($siswas as $siswa)

                <tr class="border-b">

                    <td class="py-3">
                        {{ $loop->iteration }}
                    </td>

                    <td class="py-3">
                        {{ $siswa->nis }}
                    </td>

                    <td class="py-3 font-semibold">
                        {{ $siswa->nama }}
                    </td>

                    <td class="py-3">
                        {{ $siswa->kelas }}
                    </td>

                    <td class="py-3">
                        {{ $siswa->jurusan }}
                    </td>

                    <td class="py-3">
                        {{ $siswa->email }}
                    </td>

                    <td class="py-3">
                        {{ $siswa->no_hp }}
                    </td>

                    <td class="py-3">

                        <div class="flex gap-2">

                            <a href="/siswa/{{ $siswa->id }}/edit"
                               class="border border-black px-3 py-1 bg-white hover:bg-gray-100">

                                Edit

                            </a>

                            <form action="/siswa/{{ $siswa->id }}"
                                  method="POST">

                                @csrf
                                @method('DELETE')

                                <button
                                    class="bg-[#E81123] text-white border border-black px-3 py-1">

                                    Hapus

                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection