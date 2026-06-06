@extends('layouts.guru')

@section('content')

<h1 class="text-3xl font-bold mb-2">
    Monitoring Siswa Bimbingan
</h1>

<p class="text-gray-600 mb-8">
    Pantau aktivitas dan jurnal harian siswa selama pelaksanaan PKL.
</p>

<div class="border border-black bg-white">

    <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

        DATA MONITORING SISWA

    </div>

    <div class="p-4 overflow-x-auto">

        @if($monitorings->count() == 0)

            <div class="text-center py-8 text-gray-500">

                Belum ada data monitoring.

            </div>

        @else

        <table class="w-full">

            <thead>

                <tr class="border-b border-black">

                    <th class="text-left py-3">
                        Nama Siswa
                    </th>

                    <th class="text-left py-3">
                        Tanggal
                    </th>

                    <th class="text-left py-3">
                        Kegiatan
                    </th>

                </tr>

            </thead>

            <tbody>

                @foreach($monitorings as $monitoring)

                <tr class="border-b">

                    <td class="py-3 font-semibold">
                        {{ $monitoring->siswa->nama }}
                    </td>

                    <td class="py-3">
                        {{ $monitoring->tanggal }}
                    </td>

                    <td class="py-3">
                        {{ $monitoring->kegiatan }}
                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

        @endif

    </div>

</div>

@endsection