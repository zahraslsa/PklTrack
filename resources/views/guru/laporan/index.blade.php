@extends('layouts.guru')

@section('content')

<h1 class="text-3xl font-bold mb-2">
    Review Laporan PKL
</h1>

<p class="text-gray-600 mb-8">
    Tinjau, setujui, atau minta revisi laporan PKL siswa bimbingan.
</p>

@if(session('success'))

<div class="border border-green-700 bg-green-100 text-green-700 p-3 mb-6">

    {{ session('success') }}

</div>

@endif

<div class="border border-black bg-white">

    <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

        DATA LAPORAN PKL

    </div>

    <div class="p-4 overflow-x-auto">

        <table class="w-full">

            <thead>

                <tr class="border-b border-black">

                    <th class="text-left py-3">
                        Nama Siswa
                    </th>

                    <th class="text-left py-3">
                        Judul
                    </th>

                    <th class="text-left py-3">
                        Status
                    </th>

                    <th class="text-left py-3">
                        File
                    </th>

                    <th class="text-left py-3">
                        Aksi
                    </th>

                </tr>

            </thead>

            <tbody>

                @forelse($laporans as $laporan)

                <tr class="border-b align-top">

                    <td class="py-3 font-semibold">

                        {{ $laporan->siswa->nama }}

                    </td>

                    <td class="py-3">

                        {{ $laporan->judul }}

                    </td>

                    <td class="py-3">

                        @if($laporan->status == 'approved')

                            <span class="bg-green-600 text-white border border-black px-2 py-1 text-sm">
                                APPROVED
                            </span>

                        @elseif($laporan->status == 'rejected')

                            <span class="bg-[#E81123] text-white border border-black px-2 py-1 text-sm">
                                REJECTED
                            </span>

                        @else

                            <span class="bg-yellow-500 text-black border border-black px-2 py-1 text-sm">
                                PENDING
                            </span>

                        @endif

                    </td>

                    <td class="py-3">

                        <a href="{{ asset('laporan/'.$laporan->file_laporan) }}"
                           target="_blank"
                           class="text-blue-600 underline">

                            Lihat File

                        </a>

                    </td>

                    <td class="py-3 w-80">

                        @if($laporan->status == 'pending')

                            <div class="flex gap-2 mb-3">

                                <form action="/guru/laporan/{{ $laporan->id }}/approve"
                                      method="POST">

                                    @csrf

                                    <button
                                        class="bg-green-600 text-white border border-black px-3 py-1">

                                        Approve

                                    </button>

                                </form>

                            </div>

                            <form action="/guru/laporan/{{ $laporan->id }}/reject"
                                  method="POST">

                                @csrf

                                <textarea
                                    name="catatan_guru"
                                    placeholder="Masukkan catatan revisi..."
                                    class="w-full border border-black p-2 mb-2"
                                    rows="3"
                                    required></textarea>

                                <button
                                    class="bg-[#E81123] text-white border border-black px-3 py-1">

                                    Reject

                                </button>

                            </form>

                        @else

                            <span class="text-gray-500">

                                Sudah Direview

                            </span>

                        @endif

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="5"
                        class="text-center py-6 text-gray-500">

                        Belum ada laporan PKL.

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection