@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-2">
    Dashboard Admin
</h1>

<p class="text-gray-600 mb-8">
    Kelola seluruh aktivitas PKL melalui PKLTrack.
</p>

<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4 mb-8">

    <div class="border border-black bg-white">

        <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">
            TOTAL SISWA
        </div>

        <div class="p-6 text-center">

            <h2 class="text-5xl font-bold">
                {{ $jumlahSiswa }}
            </h2>

        </div>

    </div>

    <div class="border border-black bg-white">

        <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">
            TOTAL GURU
        </div>

        <div class="p-6 text-center">

            <h2 class="text-5xl font-bold">
                {{ $jumlahGuru }}
            </h2>

        </div>

    </div>

    <div class="border border-black bg-white">

        <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">
            TEMPAT PKL
        </div>

        <div class="p-6 text-center">

            <h2 class="text-5xl font-bold">
                {{ $jumlahTempatPkl }}
            </h2>

        </div>

    </div>

</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">

    <div class="border border-black bg-white">

        <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">
            TOTAL PENEMPATAN
        </div>

        <div class="p-6 text-center">

            <h2 class="text-5xl font-bold">
                {{ $jumlahPenempatan }}
            </h2>

        </div>

    </div>

    <div class="border border-black bg-white">

        <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">
            TOTAL LAPORAN
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

        INFORMASI PKLTRACK

    </div>

    <div class="p-5">

        <p class="leading-7">

            PKLTrack merupakan sistem informasi Praktik Kerja Lapangan (PKL)
            yang digunakan untuk mengelola data siswa, guru pembimbing,
            tempat PKL, penempatan siswa, monitoring kegiatan PKL,
            laporan akhir PKL, serta penilaian PKL dalam satu sistem
            yang terintegrasi.

        </p>

    </div>

</div>

@endsection