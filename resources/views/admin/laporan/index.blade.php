@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-2">
    Laporan PKL
</h1>

<p class="text-gray-600 mb-8">
    Kelola dan verifikasi laporan PKL siswa.
</p>

@if(session('success'))

<div class="border border-green-700 bg-green-100 text-green-700 p-3 mb-4">

    {{ session('success') }}

</div>

@endif

<div class="border border-black bg-white">

    <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

        DAFTAR LAPORAN PKL

    </div>

    <div class="p-4 overflow-x-auto">

        <table class="w-full">

            <thead>

                <tr class="border-b border-black">

                    <th class="text-left py-3">No</th>
                    <th class="text-left py-3">Email</th>
                    <th class="text-left py-3">Judul</th>
                    <th class="text-left py-3">Status</th>
                    <th class="text-left py-3">File</th>
                    <th class="text-left py-3">Aksi</th>

                </tr>

            </thead>

            <tbody>

                @forelse($laporans as $laporan)

                <tr class="border-b">

                    <td class="py-3">
                        {{ $loop->iteration }}
                    </td>

                    <td class="py-3">
                        {{ $laporan->email }}
                    </td>

                    <td class="py-3 font-medium">
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

                            <span class="bg-yellow-400 border border-black px-2 py-1 text-sm">
                                PENDING
                            </span>

                        @endif

                    </td>

                    <td class="py-3">

                        <a href="{{ asset('laporan/'.$laporan->file_laporan) }}"
                           target="_blank"
                           class="text-blue-700 font-medium">

                            Lihat

                        </a>

                        |

                        <a href="{{ asset('laporan/'.$laporan->file_laporan) }}"
                           download
                           class="text-green-700 font-medium">

                            Download

                        </a>

                    </td>

                    <td class="py-3">

                        <div class="flex flex-wrap gap-2">

                            <form action="/admin/laporan/{{ $laporan->id }}/approve"
                                  method="POST">

                                @csrf

                                <button
                                    class="bg-green-600 text-white border border-black px-3 py-1">

                                    Approve

                                </button>

                            </form>

                            <form action="/admin/laporan/{{ $laporan->id }}/reject"
                                  method="POST">

                                @csrf

                                <button
                                    class="bg-[#E81123] text-white border border-black px-3 py-1">

                                    Reject

                                </button>

                            </form>

                            <form action="/admin/laporan/{{ $laporan->id }}"
                                  method="POST">

                                @csrf
                                @method('DELETE')

                                <button
                                    class="bg-gray-700 text-white border border-black px-3 py-1">

                                    Hapus

                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="6"
                        class="text-center py-6 text-gray-500">

                        Belum ada laporan PKL

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection