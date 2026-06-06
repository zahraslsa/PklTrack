
@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-2">
    Edit Data Siswa
</h1>

<p class="text-gray-600 mb-8">
    Perbarui data siswa peserta PKL.
</p>

<div class="border border-black bg-white max-w-4xl">

    <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

        FORM EDIT DATA SISWA

    </div>

    <div class="p-6">

        <form action="/siswa/{{ $siswa->id }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    NIS
                </label>

                <input type="text"
                       name="nis"
                       value="{{ $siswa->nis }}"
                       class="w-full border border-black p-2"
                       required>

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Nama
                </label>

                <input type="text"
                       name="nama"
                       value="{{ $siswa->nama }}"
                       class="w-full border border-black p-2"
                       required>

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Kelas
                </label>

                <input type="text"
                       name="kelas"
                       value="{{ $siswa->kelas }}"
                       class="w-full border border-black p-2"
                       required>

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Jurusan
                </label>

                <input type="text"
                       name="jurusan"
                       value="{{ $siswa->jurusan }}"
                       class="w-full border border-black p-2"
                       required>

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Email
                </label>

                <input type="email"
                       name="email"
                       value="{{ $siswa->email }}"
                       class="w-full border border-black p-2"
                       required>

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    No HP
                </label>

                <input type="text"
                       name="no_hp"
                       value="{{ $siswa->no_hp }}"
                       class="w-full border border-black p-2"
                       required>

            </div>

            <div class="mb-6">

                <label class="block mb-2 font-semibold">
                    Password Baru
                </label>

                <input type="password"
                       name="password"
                       class="w-full border border-black p-2">

                <p class="text-sm text-gray-500 mt-2">
                    Kosongkan jika tidak ingin mengubah password login siswa.
                </p>

            </div>

            <div class="flex gap-3">

                <button
                    class="bg-[#0078D7] text-white border border-black px-5 py-2">

                    Update

                </button>

                <a href="/siswa"
                   class="bg-gray-500 text-white border border-black px-5 py-2">

                    Kembali

                </a>

            </div>

        </form>

    </div>

</div>

@endsection

