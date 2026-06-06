@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-2">
    Tambah Nilai PKL
</h1>

<p class="text-gray-600 mb-8">
    Input nilai akhir siswa peserta PKL.
</p>

<div class="border border-black bg-white max-w-4xl">

    <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

        FORM NILAI PKL

    </div>

    <div class="p-6">

        <form action="/nilai" method="POST">

            @csrf

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Nama Siswa
                </label>

                <select name="siswa_id"
                        class="w-full border border-black p-2">

                    @foreach($siswas as $siswa)

                    <option value="{{ $siswa->id }}">
                        {{ $siswa->nama }}
                    </option>

                    @endforeach

                </select>

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Disiplin
                </label>

                <input type="number"
                       name="disiplin"
                       class="w-full border border-black p-2">

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Kerjasama
                </label>

                <input type="number"
                       name="kerjasama"
                       class="w-full border border-black p-2">

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Inisiatif
                </label>

                <input type="number"
                       name="inisiatif"
                       class="w-full border border-black p-2">

            </div>

            <div class="mb-6">

                <label class="block mb-2 font-semibold">
                    Tanggung Jawab
                </label>

                <input type="number"
                       name="tanggung_jawab"
                       class="w-full border border-black p-2">

            </div>

            <div class="flex gap-3">

                <button
                    class="bg-[#0078D7] text-white border border-black px-5 py-2">

                    Simpan

                </button>

                <a href="/nilai"
                   class="bg-gray-500 text-white border border-black px-5 py-2">

                    Kembali

                </a>

            </div>

        </form>

    </div>

</div>

@endsection