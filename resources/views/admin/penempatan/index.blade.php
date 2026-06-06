@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-2">
    Penempatan PKL
</h1>

<p class="text-gray-600 mb-8">
    Kelola penempatan siswa pada guru pembimbing dan tempat PKL.
</p>

<div class="mb-4">

    <a href="/penempatan/create"
       class="inline-block bg-[#0078D7] text-white border border-black px-4 py-2 hover:brightness-95">

        + Tambah Penempatan

    </a>

</div>

<div class="border border-black bg-white">

    <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

        DAFTAR PENEMPATAN PKL

    </div>

    <div class="p-4 overflow-x-auto">

        <table class="w-full">

            <thead>

                <tr class="border-b border-black">

                    <th class="text-left py-3">No</th>
                    <th class="text-left py-3">Siswa</th>
                    <th class="text-left py-3">Guru</th>
                    <th class="text-left py-3">Tempat PKL</th>
                    <th class="text-left py-3">Mulai</th>
                    <th class="text-left py-3">Selesai</th>
                    <th class="text-left py-3">Status</th>
                    <th class="text-left py-3">Aksi</th>

                </tr>

            </thead>

            <tbody>

                @foreach ($penempatans as $penempatan)

                <tr class="border-b">

                    <td class="py-3">
                        {{ $loop->iteration }}
                    </td>

                    <td class="py-3 font-semibold">
                        {{ $penempatan->siswa->nama }}
                    </td>

                    <td class="py-3">
                        {{ $penempatan->guru->nama }}
                    </td>

                    <td class="py-3">
                        {{ $penempatan->tempatPkl->nama_tempat }}
                    </td>

                    <td class="py-3">
                        {{ $penempatan->tanggal_mulai }}
                    </td>

                    <td class="py-3">
                        {{ $penempatan->tanggal_selesai }}
                    </td>

                    <td class="py-3">

                        @if(strtolower($penempatan->status) == 'aktif')

                            <span class="bg-green-600 text-white border border-black px-2 py-1 text-sm">
                                AKTIF
                            </span>

                        @else

                            <span class="bg-gray-500 text-white border border-black px-2 py-1 text-sm">
                                {{ strtoupper($penempatan->status) }}
                            </span>

                        @endif

                    </td>

                    <td class="py-3">

                        <div class="flex gap-2">

                            <a href="/penempatan/{{ $penempatan->id }}/edit"
                               class="border border-black px-3 py-1 bg-white hover:bg-gray-100">

                                Edit

                            </a>

                            <form action="/penempatan/{{ $penempatan->id }}"
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