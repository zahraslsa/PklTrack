@extends('layouts.siswa')

@section('content')

<div class="mb-8">

    <h1 class="text-4xl font-bold">
        Dashboard Siswa
    </h1>

    <p class="text-gray-600 mt-2">
        Pantau kegiatan PKL, laporan, dan nilai akhir kamu.
    </p>

</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-8">

    <div class="border border-black bg-white">

        <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

            DATA SISWA

        </div>

        <div class="p-4">

            @if($siswa)

                <div class="space-y-2">

                    <p>
                        <span class="font-semibold">Nama :</span>
                        {{ $siswa->nama }}
                    </p>

                    <p>
                        <span class="font-semibold">NIS :</span>
                        {{ $siswa->nis }}
                    </p>

                    <p>
                        <span class="font-semibold">Kelas :</span>
                        {{ $siswa->kelas }}
                    </p>

                    <p>
                        <span class="font-semibold">Jurusan :</span>
                        {{ $siswa->jurusan }}
                    </p>

                </div>

            @else

                <p class="text-gray-500">

                    Data siswa tidak ditemukan.

                </p>

            @endif

        </div>

    </div>

    <div class="border border-black bg-white">

        <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

            INFORMASI PKL

        </div>

        <div class="p-4">

            <p class="mb-3">

                <span class="font-semibold">
                    Tempat PKL :
                </span>

                {{ $penempatan?->tempatPkl?->nama_tempat ?? 'Belum ditempatkan' }}

            </p>

            <p>

                <span class="font-semibold">
                    Guru Pembimbing :
                </span>

                {{ $penempatan?->guru?->nama ?? '-' }}

            </p>

        </div>

    </div>

</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-4">

    <div class="border border-black bg-white">

        <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

            STATUS LAPORAN

        </div>

        <div class="p-6 text-center">

            @if($laporan)

                <span class="bg-green-600 text-white border border-black px-3 py-2">

                    SUDAH UPLOAD

                </span>

            @else

                <span class="bg-[#E81123] text-white border border-black px-3 py-2">

                    BELUM UPLOAD

                </span>

            @endif

        </div>

    </div>

    <div class="border border-black bg-white">

        <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

            NILAI AKHIR PKL

        </div>

        <div class="p-6 text-center">

            <h2 class="text-5xl font-bold">

                {{ $nilai->nilai_akhir ?? '-' }}

            </h2>

        </div>

    </div>

</div>

@endsection