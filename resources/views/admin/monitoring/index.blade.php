@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-2">
    Monitoring PKL
</h1>

<p class="text-gray-600 mb-8">
    Pantau seluruh aktivitas dan jurnal kegiatan siswa PKL.
</p>


<div class="border border-black bg-white">

    <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

        DATA MONITORING PKL

    </div>

    <div class="p-4 overflow-x-auto">

        <table class="w-full">

            <thead>

                <tr class="border-b border-black">

                    <th class="text-left py-3">No</th>
                    <th class="text-left py-3">Nama Siswa</th>
                    <th class="text-left py-3">Tanggal</th>
                    <th class="text-left py-3">Kegiatan</th>
                    <th class="text-left py-3">Aksi</th>

                </tr>

            </thead>

            <tbody>

                @foreach($monitorings as $monitoring)

                <tr class="border-b">

                    <td class="py-3">
                        {{ $loop->iteration }}
                    </td>

                    <td class="py-3 font-semibold">
                        {{ $monitoring->siswa->nama }}
                    </td>

                    <td class="py-3">
                        {{ $monitoring->tanggal }}
                    </td>

                    <td class="py-3">
                        {{ $monitoring->kegiatan }}
                    </td>

                    <td class="py-3">

                        <form action="/monitoring/{{ $monitoring->id }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button
                                class="bg-[#E81123] text-white border border-black px-3 py-1">

                                Hapus

                            </button>

                        </form>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection