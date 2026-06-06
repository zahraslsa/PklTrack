@extends('layouts.guru')

@section('content')

<div class="mb-8">

    <h1 class="text-4xl font-bold">
        Dashboard Guru
    </h1>

    <p class="text-gray-600 mt-2">
        Kelola siswa bimbingan, monitoring, laporan, dan penilaian PKL.
    </p>

</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">

    <div class="border border-black bg-white">

        <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

            SISWA BIMBINGAN

        </div>

        <div class="p-6 text-center">

            <h2 class="text-5xl font-bold">

                {{ $jumlahSiswa }}

            </h2>

        </div>

    </div>

    <div class="border border-black bg-white">

        <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

            MONITORING

        </div>

        <div class="p-6 text-center">

            <h2 class="text-5xl font-bold">

                {{ $jumlahMonitoring }}

            </h2>

        </div>

    </div>

    <div class="border border-black bg-white">

        <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

            LAPORAN

        </div>

        <div class="p-6 text-center">

            <h2 class="text-5xl font-bold">

                {{ $jumlahLaporan }}

            </h2>

        </div>

    </div>

</div>

<div class="border border-black bg-white">

    <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

        DAFTAR SISWA BIMBINGAN

    </div>

    <div class="p-4 overflow-x-auto">

        <table class="w-full">

            <thead>

                <tr class="border-b border-black">

                    <th class="text-left py-3">
                        No
                    </th>

                    <th class="text-left py-3">
                        Nama
                    </th>

                    <th class="text-left py-3">
                        Kelas
                    </th>

                    <th class="text-left py-3">
                        Jurusan
                    </th>

                </tr>

            </thead>

            <tbody>

                @foreach($siswaBimbingan as $item)

                <tr class="border-b">

                    <td class="py-3">
                        {{ $loop->iteration }}
                    </td>

                    <td class="py-3 font-semibold">
                        {{ $item->siswa->nama }}
                    </td>

                    <td class="py-3">
                        {{ $item->siswa->kelas }}
                    </td>

                    <td class="py-3">
                        {{ $item->siswa->jurusan }}
                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection