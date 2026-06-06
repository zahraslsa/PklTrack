@extends('layouts.siswa')

@section('content')

<h1 class="text-3xl font-bold mb-2">
    Jurnal PKL
</h1>

<p class="text-gray-600 mb-8">
    Catat dan pantau seluruh kegiatan yang dilakukan selama PKL.
</p>

<div class="mb-4">

    <a href="/siswa/monitoring/create"
       class="inline-block bg-[#0078D7] text-white border border-black px-4 py-2">

        + Tambah Jurnal

    </a>

</div>

@if(session('success'))

<div class="border border-green-700 bg-green-100 text-green-700 p-3 mb-6">

    {{ session('success') }}

</div>

@endif

<div class="border border-black bg-white">

    <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

        DATA JURNAL PKL

    </div>

    <div class="p-4 overflow-x-auto">

        <table class="w-full">

            <thead>

                <tr class="border-b border-black">

                    <th class="text-left py-3">
                        No
                    </th>

                    <th class="text-left py-3">
                        Tanggal
                    </th>

                    <th class="text-left py-3">
                        Kegiatan
                    </th>

                </tr>

            </thead>

            <tbody>

                @forelse($monitorings as $monitoring)

                <tr class="border-b">

                    <td class="py-3">
                        {{ $loop->iteration }}
                    </td>

                    <td class="py-3">
                        {{ $monitoring->tanggal }}
                    </td>

                    <td class="py-3">
                        {{ $monitoring->kegiatan }}
                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="3"
                        class="text-center py-6 text-gray-500">

                        Belum ada jurnal PKL

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection