@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-2">
    Edit Penempatan PKL
</h1>

<p class="text-gray-600 mb-8">
    Perbarui data penempatan siswa PKL.
</p>

<div class="border border-black bg-white max-w-4xl">

    <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

        FORM EDIT PENEMPATAN PKL

    </div>

    <div class="p-6">

        <form action="/penempatan/{{ $penempatan->id }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Siswa
                </label>

                <select name="siswa_id"
                        class="w-full border border-black p-2">

                    @foreach ($siswas as $siswa)

                    <option value="{{ $siswa->id }}"
                        {{ $penempatan->siswa_id == $siswa->id ? 'selected' : '' }}>

                        {{ $siswa->nama }}

                    </option>

                    @endforeach

                </select>

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Guru Pembimbing
                </label>

                <select name="guru_id"
                        class="w-full border border-black p-2">

                    @foreach ($gurus as $guru)

                    <option value="{{ $guru->id }}"
                        {{ $penempatan->guru_id == $guru->id ? 'selected' : '' }}>

                        {{ $guru->nama }}

                    </option>

                    @endforeach

                </select>

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Tempat PKL
                </label>

                <select name="tempat_pkl_id"
                        class="w-full border border-black p-2">

                    @foreach ($tempatPkls as $tempat)

                    <option value="{{ $tempat->id }}"
                        {{ $penempatan->tempat_pkl_id == $tempat->id ? 'selected' : '' }}>

                        {{ $tempat->nama_tempat }}

                    </option>

                    @endforeach

                </select>

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Tanggal Mulai
                </label>

                <input type="date"
                       name="tanggal_mulai"
                       value="{{ $penempatan->tanggal_mulai }}"
                       class="w-full border border-black p-2">

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Tanggal Selesai
                </label>

                <input type="date"
                       name="tanggal_selesai"
                       value="{{ $penempatan->tanggal_selesai }}"
                       class="w-full border border-black p-2">

            </div>

            <div class="mb-6">

                <label class="block mb-2 font-semibold">
                    Status
                </label>

                <select name="status"
                        class="w-full border border-black p-2">

                    <option value="Berlangsung"
                        {{ $penempatan->status == 'Berlangsung' ? 'selected' : '' }}>
                        Berlangsung
                    </option>

                    <option value="Selesai"
                        {{ $penempatan->status == 'Selesai' ? 'selected' : '' }}>
                        Selesai
                    </option>

                </select>

            </div>

            <div class="flex gap-3">

                <button
                    class="bg-[#0078D7] text-white border border-black px-5 py-2">

                    Update

                </button>

                <a href="/penempatan"
                   class="bg-gray-500 text-white border border-black px-5 py-2">

                    Kembali

                </a>

            </div>

        </form>

    </div>

</div>

@endsection