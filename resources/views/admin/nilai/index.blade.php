@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-2">
    Nilai PKL
</h1>

<p class="text-gray-600 mb-8">
    Kelola nilai akhir peserta Praktik Kerja Lapangan.
</p>

<div class="mb-4">

    <a href="/nilai/create"
       class="inline-block bg-[#0078D7] text-white border border-black px-4 py-2 hover:brightness-95">

        + Tambah Nilai

    </a>

</div>

<div class="border border-black bg-white">

    <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

        DAFTAR NILAI PKL

    </div>

    <div class="p-4 overflow-x-auto">

        <table class="w-full">

            <thead>

                <tr class="border-b border-black">

                    <th class="text-left py-3">No</th>
                    <th class="text-left py-3">Nama Siswa</th>
                    <th class="text-left py-3">Disiplin</th>
                    <th class="text-left py-3">Kerjasama</th>
                    <th class="text-left py-3">Inisiatif</th>
                    <th class="text-left py-3">Tanggung Jawab</th>
                    <th class="text-left py-3">Nilai Akhir</th>
                    <th class="text-left py-3">Aksi</th>

                </tr>

            </thead>

            <tbody>

                @foreach($nilais as $nilai)

                <tr class="border-b">

                    <td class="py-3">
                        {{ $loop->iteration }}
                    </td>

                    <td class="py-3 font-semibold">
                        {{ $nilai->siswa->nama }}
                    </td>

                    <td class="py-3">
                        {{ $nilai->disiplin }}
                    </td>

                    <td class="py-3">
                        {{ $nilai->kerjasama }}
                    </td>

                    <td class="py-3">
                        {{ $nilai->inisiatif }}
                    </td>

                    <td class="py-3">
                        {{ $nilai->tanggung_jawab }}
                    </td>

                    <td class="py-3">

                        <span class="bg-green-600 text-white border border-black px-2 py-1 text-sm">

                            {{ $nilai->nilai_akhir }}

                        </span>

                    </td>

                    <td class="py-3">

                        <form action="/nilai/{{ $nilai->id }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button
                                class="bg-[#E81123] text-white border border-black px-3 py-1">

                                Hapus

                            </button>

                        </form>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection