@extends('layouts.siswa')

@section('content')

<h1 class="text-3xl font-bold mb-2">
    Upload Laporan PKL
</h1>

<p class="text-gray-600 mb-8">
    Upload laporan akhir PKL dan pantau status persetujuannya.
</p>

@if(session('success'))

<div class="border border-green-700 bg-green-100 text-green-700 p-3 mb-6">

    {{ session('success') }}

</div>

@endif

@if($latest)

<div class="border border-black bg-white">

    <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

        STATUS LAPORAN PKL

    </div>

    <div class="p-6">

        <p class="mb-3">

            <span class="font-semibold">
                Judul :
            </span>

            {{ $latest->judul }}

        </p>

        <p class="mb-4">

            <span class="font-semibold">
                Status :
            </span>

            @if($latest->status == 'approved')

                <span class="bg-green-600 text-white border border-black px-2 py-1 text-sm">
                    APPROVED
                </span>

            @elseif($latest->status == 'rejected')

                <span class="bg-[#E81123] text-white border border-black px-2 py-1 text-sm">
                    REJECTED
                </span>

            @else

                <span class="bg-yellow-500 text-black border border-black px-2 py-1 text-sm">
                    PENDING
                </span>

            @endif

        </p>

        <a href="{{ asset('laporan/'.$latest->file_laporan) }}"
           target="_blank"
           class="text-blue-600 underline">

            Lihat File

        </a>

        @if($latest->status == 'rejected')

            <div class="mt-5 border border-red-300 bg-red-50 p-3">

                <p class="font-semibold text-red-700 mb-2">
                    Catatan Guru:
                </p>

                <p>
                    {{ $latest->catatan_guru ?? 'Tidak ada catatan.' }}
                </p>

            </div>

            <div class="mt-5 border border-black bg-gray-50 p-4">

                <p class="mb-4 text-sm text-gray-600">
                    Laporan ditolak. Silakan upload ulang hasil revisi.
                </p>

                <form action="/siswa/laporan"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf

                    <div class="mb-4">

                        <label class="block mb-2 font-semibold">
                            Judul Laporan
                        </label>

                        <input type="text"
                               name="judul"
                               class="w-full border border-black p-2"
                               required>

                    </div>

                    <div class="mb-4">

                        <label class="block mb-2 font-semibold">
                            File PDF
                        </label>

                        <input type="file"
                               name="file_laporan"
                               class="w-full border border-black p-2"
                               required>

                    </div>

                    <button
                        class="bg-[#0078D7] text-white border border-black px-5 py-2">

                        Upload Revisi

                    </button>

                </form>

            </div>

        @else

            <div class="mt-5 text-gray-500">

                Menunggu review guru pembimbing.

            </div>

        @endif

    </div>

</div>

@else

<div class="border border-black bg-white max-w-4xl">

    <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

        FORM UPLOAD LAPORAN

    </div>

    <div class="p-6">

        <form action="/siswa/laporan"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Judul Laporan
                </label>

                <input type="text"
                       name="judul"
                       class="w-full border border-black p-2"
                       required>

            </div>

            <div class="mb-6">

                <label class="block mb-2 font-semibold">
                    File PDF
                </label>

                <input type="file"
                       name="file_laporan"
                       class="w-full border border-black p-2"
                       required>

            </div>

            <button
                class="bg-[#0078D7] text-white border border-black px-5 py-2">

                Upload Laporan

            </button>

        </form>

    </div>

</div>

@endif

@endsection