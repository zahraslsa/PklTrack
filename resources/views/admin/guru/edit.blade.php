@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-2">
    Edit Data Guru
</h1>

<p class="text-gray-600 mb-8">
    Perbarui data guru pembimbing PKL.
</p>

<div class="border border-black bg-white max-w-3xl">

    <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

        FORM EDIT DATA GURU

    </div>

    <div class="p-6">

        <form action="/guru/{{ $guru->id }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    NIP
                </label>

                <input type="text"
                       name="nip"
                       value="{{ $guru->nip }}"
                       class="w-full border border-black p-2"
                       required>

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Nama Guru
                </label>

                <input type="text"
                       name="nama"
                       value="{{ $guru->nama }}"
                       class="w-full border border-black p-2"
                       required>

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Email
                </label>

                <input type="email"
                       name="email"
                       value="{{ $guru->email }}"
                       class="w-full border border-black p-2"
                       required>

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    No HP
                </label>

                <input type="text"
                       name="no_hp"
                       value="{{ $guru->no_hp }}"
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
                    Kosongkan jika tidak ingin mengubah password login guru.
                </p>

            </div>

            <div class="flex gap-3">

                <button
                    class="bg-[#0078D7] text-white border border-black px-5 py-2">

                    Update

                </button>

                <a href="/guru"
                   class="bg-gray-500 text-white border border-black px-5 py-2">

                    Kembali

                </a>

            </div>

        </form>

    </div>

</div>

@endsection

