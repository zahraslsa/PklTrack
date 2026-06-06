@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-2">
    Edit Tempat PKL
</h1>

<p class="text-gray-600 mb-8">
    Perbarui data tempat Praktik Kerja Lapangan.
</p>

<div class="border border-black bg-white max-w-4xl">

    <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

        FORM EDIT TEMPAT PKL

    </div>

    <div class="p-6">

        <form action="/tempat-pkl/{{ $tempatPkl->id }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Nama Tempat
                </label>

                <input type="text"
                       name="nama_tempat"
                       value="{{ $tempatPkl->nama_tempat }}"
                       class="w-full border border-black p-2">

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Alamat
                </label>

                <textarea
                    name="alamat"
                    rows="4"
                    class="w-full border border-black p-2">{{ $tempatPkl->alamat }}</textarea>

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Pembimbing Lapangan
                </label>

                <input type="text"
                       name="pembimbing_lapangan"
                       value="{{ $tempatPkl->pembimbing_lapangan }}"
                       class="w-full border border-black p-2">

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    No Telepon
                </label>

                <input type="text"
                       name="no_telp"
                       value="{{ $tempatPkl->no_telp }}"
                       class="w-full border border-black p-2">

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Kuota
                </label>

                <input type="number"
                       name="kuota"
                       value="{{ $tempatPkl->kuota }}"
                       class="w-full border border-black p-2">

            </div>

            <div class="mb-6">

                <label class="block mb-2 font-semibold">
                    Status
                </label>

                <select
                    name="status"
                    class="w-full border border-black p-2">

                    <option value="Aktif"
                        {{ $tempatPkl->status == 'Aktif' ? 'selected' : '' }}>
                        Aktif
                    </option>

                    <option value="Nonaktif"
                        {{ $tempatPkl->status == 'Nonaktif' ? 'selected' : '' }}>
                        Nonaktif
                    </option>

                </select>

            </div>

            <div class="flex gap-3">

                <button
                    class="bg-[#0078D7] text-white border border-black px-5 py-2">

                    Update

                </button>

                <a href="/tempat-pkl"
                   class="bg-gray-500 text-white border border-black px-5 py-2">

                    Kembali

                </a>

            </div>

        </form>

    </div>

</div>

@endsection