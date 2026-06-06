@extends('layouts.siswa')

@section('content')

<h1 class="text-3xl font-bold mb-2">
    Tambah Jurnal PKL
</h1>

<p class="text-gray-600 mb-8">
    Catat kegiatan harian yang dilakukan selama praktik kerja lapangan.
</p>

<div class="border border-black bg-white max-w-4xl">

    <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

        FORM JURNAL PKL

    </div>

    <div class="p-6">

        <form action="/siswa/monitoring"
              method="POST">

            @csrf

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Tanggal
                </label>

                <input
                    type="date"
                    name="tanggal"
                    class="w-full border border-black p-2"
                    required>

            </div>

            <div class="mb-6">

                <label class="block mb-2 font-semibold">
                    Kegiatan
                </label>

                <textarea
                    name="kegiatan"
                    rows="5"
                    class="w-full border border-black p-2"
                    required></textarea>

            </div>

            <div class="flex gap-3">

                <button
                    type="submit"
                    class="bg-[#0078D7] text-white border border-black px-5 py-2">

                    Simpan Jurnal

                </button>

                <a href="/siswa/monitoring"
                   class="bg-gray-500 text-white border border-black px-5 py-2">

                    Kembali

                </a>

            </div>

        </form>

    </div>

</div>

@endsection