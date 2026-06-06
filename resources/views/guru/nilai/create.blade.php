@extends('layouts.guru')

@section('content')

<h1 class="text-3xl font-bold mb-2">
    Input Nilai PKL
</h1>

<p class="text-gray-600 mb-8">
    Masukkan nilai akhir siswa berdasarkan hasil bimbingan dan monitoring PKL.
</p>

<div class="border border-black bg-white max-w-4xl">

    <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

        FORM INPUT NILAI PKL

    </div>

    <div class="p-6">

        <form action="/guru/nilai" method="POST">

            @csrf

            <input type="hidden"
                   name="siswa_id"
                   value="{{ $siswa->id }}">

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Nama Siswa
                </label>

                <input type="text"
                       value="{{ $siswa->nama }}"
                       class="w-full border border-black p-2 bg-gray-100"
                       readonly>

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Disiplin
                </label>

                <input type="number"
                       name="disiplin"
                       class="w-full border border-black p-2"
                       required>

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Kerjasama
                </label>

                <input type="number"
                       name="kerjasama"
                       class="w-full border border-black p-2"
                       required>

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Inisiatif
                </label>

                <input type="number"
                       name="inisiatif"
                       class="w-full border border-black p-2"
                       required>

            </div>

            <div class="mb-6">

                <label class="block mb-2 font-semibold">
                    Tanggung Jawab
                </label>

                <input type="number"
                       name="tanggung_jawab"
                       class="w-full border border-black p-2"
                       required>

            </div>

            <div class="flex gap-3">

                <button
                    class="bg-[#0078D7] text-white border border-black px-5 py-2">

                    Simpan Nilai

                </button>

                <a href="/guru/nilai"
                   class="bg-gray-500 text-white border border-black px-5 py-2">

                    Kembali

                </a>

            </div>

        </form>

    </div>

</div>

@endsection