@extends('layouts.guru')

@section('content')

<h1 class="text-3xl font-bold mb-2">
    Siswa Bimbingan
</h1>

<p class="text-gray-600 mb-8">
    Daftar siswa yang berada dalam bimbingan guru pembimbing.
</p>

<div class="border border-black bg-white">

    <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

        DATA SISWA BIMBINGAN

    </div>

    <div class="p-4 overflow-x-auto">

        <table class="w-full">

            <thead>

                <tr class="border-b border-black">

                    <th class="text-left py-3">
                        No
                    </th>

                    <th class="text-left py-3">
                        NIS
                    </th>

                    <th class="text-left py-3">
                        Nama
                    </th>

                    <th class="text-left py-3">
                        Kelas
                    </th>

                    <th class="text-left py-3">
                        Tempat PKL
                    </th>

                    <th class="text-left py-3">
                        Status
                    </th>

                </tr>

            </thead>

            <tbody>

                @forelse($penempatans as $item)

                <tr class="border-b">

                    <td class="py-3">
                        {{ $loop->iteration }}
                    </td>

                    <td class="py-3">
                        {{ $item->siswa->nis }}
                    </td>

                    <td class="py-3 font-semibold">
                        {{ $item->siswa->nama }}
                    </td>

                    <td class="py-3">
                        {{ $item->siswa->kelas }}
                    </td>

                    <td class="py-3">
                        {{ $item->tempatPkl->nama_tempat }}
                    </td>

                    <td class="py-3">

                        @if(strtolower($item->status) == 'berlangsung')

                            <span class="bg-green-600 text-white border border-black px-2 py-1 text-sm">
                                BERLANGSUNG
                            </span>

                        @elseif(strtolower($item->status) == 'selesai')

                            <span class="bg-[#0078D7] text-white border border-black px-2 py-1 text-sm">
                                SELESAI
                            </span>

                        @else

                            <span class="bg-gray-500 text-white border border-black px-2 py-1 text-sm">
                                {{ strtoupper($item->status) }}
                            </span>

                        @endif

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="6"
                        class="text-center py-6 text-gray-500">

                        Belum ada siswa bimbingan

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection