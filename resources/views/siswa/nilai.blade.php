@extends('layouts.siswa')

@section('content')

<h1 class="text-3xl font-bold mb-2">
    Nilai PKL
</h1>

<p class="text-gray-600 mb-8">
    Lihat hasil penilaian PKL yang diberikan oleh guru pembimbing.
</p>

@if($nilai)

<div class="border border-black bg-white">

    <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black">

        HASIL PENILAIAN PKL

    </div>

    <div class="p-4 overflow-x-auto">

        <table class="w-full">

            <tbody>

                <tr class="border-b">

                    <td class="py-3 font-semibold w-64">
                        Disiplin
                    </td>

                    <td class="py-3">
                        {{ $nilai->disiplin }}
                    </td>

                </tr>

                <tr class="border-b">

                    <td class="py-3 font-semibold">
                        Kerjasama
                    </td>

                    <td class="py-3">
                        {{ $nilai->kerjasama }}
                    </td>

                </tr>

                <tr class="border-b">

                    <td class="py-3 font-semibold">
                        Inisiatif
                    </td>

                    <td class="py-3">
                        {{ $nilai->inisiatif }}
                    </td>

                </tr>

                <tr class="border-b">

                    <td class="py-3 font-semibold">
                        Tanggung Jawab
                    </td>

                    <td class="py-3">
                        {{ $nilai->tanggung_jawab }}
                    </td>

                </tr>

                <tr>

                    <td class="py-4 font-bold text-lg">
                        Nilai Akhir
                    </td>

                    <td class="py-4">

                        <span class="bg-green-600 text-white border border-black px-4 py-2 text-lg font-bold">

                            {{ $nilai->nilai_akhir }}

                        </span>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

@else

<div class="border border-yellow-500 bg-yellow-100 text-yellow-800 p-4">

    Nilai PKL belum tersedia.

</div>

@endif

@endsection