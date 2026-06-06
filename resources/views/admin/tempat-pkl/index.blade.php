@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-2">
    Data Tempat PKL
</h1>

<p class="text-gray-600 mb-8">
    Kelola data tempat Praktik Kerja Lapangan siswa.
</p>

<div class="mb-4">

    <a href="/tempat-pkl/create"
       class="inline-block bg-[#0078D7] text-white border border-black px-4 py-2 hover:brightness-95">

        + Tambah Tempat PKL

    </a>

</div>

<div class="border border-black bg-white">

    <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

        DAFTAR TEMPAT PKL

    </div>

    <div class="p-4 overflow-x-auto">

        <table class="w-full">

            <thead>

                <tr class="border-b border-black">

                    <th class="text-left py-3">No</th>
                    <th class="text-left py-3">Nama Tempat</th>
                    <th class="text-left py-3">Alamat</th>
                    <th class="text-left py-3">Pembimbing</th>
                    <th class="text-left py-3">No Telp</th>
                    <th class="text-left py-3">Kuota</th>
                    <th class="text-left py-3">Status</th>
                    <th class="text-left py-3">Aksi</th>

                </tr>

            </thead>

            <tbody>

                @foreach ($tempatPkls as $tempatPkl)

                <tr class="border-b">

                    <td class="py-3">
                        {{ $loop->iteration }}
                    </td>

                    <td class="py-3 font-semibold">
                        {{ $tempatPkl->nama_tempat }}
                    </td>

                    <td class="py-3">
                        {{ $tempatPkl->alamat }}
                    </td>

                    <td class="py-3">
                        {{ $tempatPkl->pembimbing_lapangan }}
                    </td>

                    <td class="py-3">
                        {{ $tempatPkl->no_telp }}
                    </td>

                    <td class="py-3">
                        {{ $tempatPkl->kuota }}
                    </td>

                    <td class="py-3">

                        @if(strtolower($tempatPkl->status) == 'aktif')

                            <span class="bg-green-600 text-white border border-black px-2 py-1 text-sm">
                                AKTIF
                            </span>

                        @else

                            <span class="bg-gray-500 text-white border border-black px-2 py-1 text-sm">
                                {{ strtoupper($tempatPkl->status) }}
                            </span>

                        @endif

                    </td>

                    <td class="py-3">

                        <div class="flex gap-2">

                            <a href="/tempat-pkl/{{ $tempatPkl->id }}/edit"
                               class="border border-black px-3 py-1 bg-white hover:bg-gray-100">

                                Edit

                            </a>

                            <form action="/tempat-pkl/{{ $tempatPkl->id }}"
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