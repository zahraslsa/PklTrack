<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PKLTrack - Sistem Monitoring PKL</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white border-b-2 border-black sticky top-0 z-50">

        <div class="max-w-7xl mx-auto px-8 py-4 flex justify-between items-center">

            <h1 class="text-2xl font-bold text-[#0078D7]">
                PKLTrack
            </h1>

            <a href="{{ route('login') }}"
               class="bg-[#0078D7] text-white border border-black px-5 py-2 hover:opacity-90">

                Login

            </a>

        </div>

    </nav>

    <!-- Hero -->
    <section class="max-w-7xl mx-auto px-8 py-24">

        <div class="grid lg:grid-cols-2 gap-12 items-center">

            <div>

                <h1 class="text-5xl font-bold leading-tight mb-6">

                    Sistem Monitoring
                    Praktik Kerja Lapangan
                    Berbasis Web

                </h1>

                <p class="text-lg text-gray-600 leading-relaxed mb-8">

                    PKLTrack merupakan sistem informasi yang dirancang untuk membantu
                    sekolah dalam mengelola seluruh proses Praktik Kerja Lapangan (PKL)
                    secara digital. Mulai dari pengelolaan data siswa, guru pembimbing,
                    tempat PKL, penempatan siswa, monitoring kegiatan harian,
                    pengumpulan laporan, hingga penilaian akhir dapat dilakukan
                    secara terintegrasi dalam satu platform.

                </p>

                <a href="{{ route('login') }}"
                   class="bg-[#0078D7] text-white border border-black px-6 py-3">

                    Mulai Sekarang

                </a>

            </div>

            <div>

                <div class="bg-white border-2 border-black p-8">

                    <h2 class="text-2xl font-bold mb-6">
                        Mengapa PKLTrack?
                    </h2>

                    <div class="space-y-4">

                        <div class="border border-black p-4">
                            Monitoring kegiatan siswa lebih mudah dan terstruktur.
                        </div>

                        <div class="border border-black p-4">
                            Mengurangi penggunaan dokumen fisik dan pencatatan manual.
                        </div>

                        <div class="border border-black p-4">
                            Memudahkan guru dalam melakukan pemantauan dan penilaian.
                        </div>

                        <div class="border border-black p-4">
                            Seluruh data PKL tersimpan secara terpusat dan aman.
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Tentang -->
    <section class="bg-white border-y-2 border-black">

        <div class="max-w-7xl mx-auto px-8 py-20">

            <h2 class="text-4xl font-bold text-center mb-12">
                Tentang PKLTrack
            </h2>

            <div class="space-y-6 text-gray-700 leading-relaxed text-justify">

                <p>
                    Praktik Kerja Lapangan (PKL) merupakan salah satu program pendidikan
                    yang bertujuan memberikan pengalaman kerja nyata kepada siswa sesuai
                    dengan kompetensi keahlian yang dipelajari di sekolah. Melalui kegiatan
                    ini, siswa dapat mengembangkan keterampilan teknis, meningkatkan
                    kedisiplinan, serta memahami budaya kerja di dunia industri maupun
                    instansi.
                </p>

                <p>
                    Namun dalam pelaksanaannya, proses monitoring PKL sering kali masih
                    dilakukan secara manual. Guru pembimbing kesulitan memantau aktivitas
                    siswa secara berkala, laporan dikumpulkan dalam bentuk fisik,
                    serta proses penilaian membutuhkan waktu yang lebih lama karena
                    data tersebar di berbagai dokumen.
                </p>

                <p>
                    PKLTrack hadir sebagai solusi digital yang membantu sekolah dalam
                    mengelola seluruh proses PKL secara lebih efektif dan efisien.
                    Dengan sistem ini, seluruh aktivitas PKL dapat dipantau secara
                    real-time sehingga komunikasi antara admin, guru pembimbing,
                    dan siswa menjadi lebih mudah serta terorganisir.
                </p>

            </div>

        </div>

    </section>

    <!-- Fitur -->
    <section class="max-w-7xl mx-auto px-8 py-20">

        <h2 class="text-4xl font-bold text-center mb-12">
            Fitur Utama Sistem
        </h2>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

            <div class="bg-white border-2 border-black p-6">
                <h3 class="font-bold text-lg mb-3">Data Siswa</h3>
                <p class="text-gray-600">
                    Mengelola data siswa peserta PKL secara terpusat dan mudah diakses.
                </p>
            </div>

            <div class="bg-white border-2 border-black p-6">
                <h3 class="font-bold text-lg mb-3">Data Guru</h3>
                <p class="text-gray-600">
                    Mengelola guru pembimbing yang bertugas melakukan monitoring PKL.
                </p>
            </div>

            <div class="bg-white border-2 border-black p-6">
                <h3 class="font-bold text-lg mb-3">Tempat PKL</h3>
                <p class="text-gray-600">
                    Mengelola data perusahaan, instansi, dan lokasi PKL siswa.
                </p>
            </div>

            <div class="bg-white border-2 border-black p-6">
                <h3 class="font-bold text-lg mb-3">Penempatan PKL</h3>
                <p class="text-gray-600">
                    Menentukan lokasi PKL dan guru pembimbing untuk setiap siswa.
                </p>
            </div>

            <div class="bg-white border-2 border-black p-6">
                <h3 class="font-bold text-lg mb-3">Monitoring PKL</h3>
                <p class="text-gray-600">
                    Siswa dapat mengisi jurnal harian dan guru dapat memantau kegiatan.
                </p>
            </div>

            <div class="bg-white border-2 border-black p-6">
                <h3 class="font-bold text-lg mb-3">Laporan PKL</h3>
                <p class="text-gray-600">
                    Upload laporan PKL secara online tanpa perlu pengumpulan fisik.
                </p>
            </div>

            <div class="bg-white border-2 border-black p-6">
                <h3 class="font-bold text-lg mb-3">Review Laporan</h3>
                <p class="text-gray-600">
                    Guru dapat menyetujui atau meminta revisi laporan siswa.
                </p>
            </div>

            <div class="bg-white border-2 border-black p-6">
                <h3 class="font-bold text-lg mb-3">Penilaian PKL</h3>
                <p class="text-gray-600">
                    Penilaian dilakukan secara digital dan hasil dapat dilihat siswa.
                </p>
            </div>

        </div>

    </section>

    <!-- Manfaat -->
    <section class="bg-white border-y-2 border-black">

        <div class="max-w-7xl mx-auto px-8 py-20">

            <h2 class="text-4xl font-bold text-center mb-12">
                Manfaat Sistem
            </h2>

            <div class="grid md:grid-cols-3 gap-6">

                <div class="border-2 border-black p-6">

                    <h3 class="font-bold text-xl mb-4">
                        Untuk Admin
                    </h3>

                    <ul class="space-y-2">
                        <li>• Mengelola data siswa dan guru.</li>
                        <li>• Mengelola tempat PKL.</li>
                        <li>• Mengatur penempatan siswa.</li>
                        <li>• Mengontrol seluruh proses PKL.</li>
                    </ul>

                </div>

                <div class="border-2 border-black p-6">

                    <h3 class="font-bold text-xl mb-4">
                        Untuk Guru
                    </h3>

                    <ul class="space-y-2">
                        <li>• Memantau jurnal kegiatan siswa.</li>
                        <li>• Mereview laporan PKL.</li>
                        <li>• Memberikan nilai akhir.</li>
                        <li>• Memudahkan proses bimbingan.</li>
                    </ul>

                </div>

                <div class="border-2 border-black p-6">

                    <h3 class="font-bold text-xl mb-4">
                        Untuk Siswa
                    </h3>

                    <ul class="space-y-2">
                        <li>• Mengisi jurnal harian secara online.</li>
                        <li>• Upload laporan dengan mudah.</li>
                        <li>• Melihat status laporan.</li>
                        <li>• Melihat hasil penilaian PKL.</li>
                    </ul>

                </div>

            </div>

        </div>

    </section>

    <!-- Alur -->
    <section class="max-w-7xl mx-auto px-8 py-20">

        <h2 class="text-4xl font-bold text-center mb-12">
            Alur Penggunaan Sistem
        </h2>

        <div class="space-y-4">

            <div class="bg-white border border-black p-5">
                1. Admin menambahkan data siswa, guru pembimbing, dan tempat PKL.
            </div>

            <div class="bg-white border border-black p-5">
                2. Admin melakukan penempatan siswa ke lokasi PKL yang tersedia.
            </div>

            <div class="bg-white border border-black p-5">
                3. Siswa melaksanakan kegiatan PKL sesuai tempat yang telah ditentukan.
            </div>

            <div class="bg-white border border-black p-5">
                4. Siswa mengisi jurnal kegiatan harian melalui sistem.
            </div>

            <div class="bg-white border border-black p-5">
                5. Guru pembimbing melakukan monitoring kegiatan siswa.
            </div>

            <div class="bg-white border border-black p-5">
                6. Siswa mengunggah laporan PKL dan guru melakukan review.
            </div>

            <div class="bg-white border border-black p-5">
                7. Guru memberikan nilai akhir dan siswa dapat melihat hasil penilaian.
            </div>

        </div>

    </section>

    <!-- Footer -->
    <footer class="bg-[#0078D7] text-white">

        <div class="max-w-7xl mx-auto px-8 py-10 text-center">

            <h2 class="text-2xl font-bold mb-3">
                PKLTrack
            </h2>

            <p class="max-w-3xl mx-auto leading-relaxed">
                Sistem Monitoring Praktik Kerja Lapangan berbasis web yang membantu
                sekolah dalam mengelola seluruh proses PKL secara digital,
                terintegrasi, dan efisien.
            </p>

            <p class="mt-6 text-sm">
                © {{ date('Y') }} PKLTrack. All Rights Reserved.
            </p>

        </div>

    </footer>

</body>
</html>
