@extends('layouts.guru')

@section('content')

<h1 class="text-3xl font-bold mb-2">
    Nilai PKL Siswa
</h1>

<p class="text-gray-600 mb-8">
    Kelola dan input nilai akhir siswa bimbingan.
</p>

@if(session('success'))

<div class="border border-green-700 bg-green-100 text-green-700 p-3 mb-6">

    {{ session('success') }}

</div>

@endif

<div class="border border-black bg-white">

    <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

        DATA NILAI SISWA

    </div>

    <div class="p-4 overflow-x-auto">

        <table class="w-full">

            <thead>

                <tr class="border-b border-black">

                    <th class="text-left py-3">
                        Nama
                    </th>

                    <th class="text-left py-3">
                        Kelas
                    </th>

                    <th class="text-left py-3">
                        Status
                    </th>

                </tr>

            </thead>

            <tbody>

                @foreach($siswas as $siswa)

                <tr class="border-b">

                    <td class="py-3 font-semibold">

                        {{ $siswa->nama }}

                    </td>

                    <td class="py-3">

                        {{ $siswa->kelas }}

                    </td>

                    <td class="py-3">

                        @if($siswa->nilai)

                            <span class="bg-green-600 text-white border border-black px-3 py-1 text-sm">

                                Sudah Dinilai ({{ $siswa->nilai->nilai_akhir }})

                            </span>

                        @else

                            <a href="/guru/nilai/{{ $siswa->id }}/create"
                               class="bg-[#0078D7] text-white border border-black px-3 py-1">

                                Input Nilai

                            </a>

                        @endif

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection