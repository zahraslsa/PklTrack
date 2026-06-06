<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PKLTrack</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">

    <div class="w-full max-w-6xl bg-white border-2 border-black overflow-hidden">

        <div class="grid lg:grid-cols-2">

            <!-- KIRI -->
            <div class="bg-[#0078D7] text-white p-10">

                <h1 class="text-5xl font-bold mb-4">
                    PKLTrack
                </h1>

                <p class="text-xl mb-8">
                    Sistem Monitoring Praktik Kerja Lapangan
                </p>

                <div class="border-t border-white mb-8"></div>

                <p class="leading-relaxed mb-8">

                    PKLTrack merupakan sistem informasi berbasis web yang
                    membantu sekolah dalam mengelola seluruh proses PKL
                    secara digital. Mulai dari pengelolaan data siswa,
                    guru pembimbing, tempat PKL, monitoring kegiatan,
                    pengumpulan laporan hingga penilaian akhir.

                </p>

                <div class="space-y-4">

                    <div class="bg-blue-700 border border-white p-4">
                        ✓ Monitoring kegiatan PKL secara real-time
                    </div>

                    <div class="bg-blue-700 border border-white p-4">
                        ✓ Upload dan review laporan PKL
                    </div>

                    <div class="bg-blue-700 border border-white p-4">
                        ✓ Penilaian siswa secara digital
                    </div>

                    <div class="bg-blue-700 border border-white p-4">
                        ✓ Manajemen data PKL terintegrasi
                    </div>

                </div>

            </div>

            <!-- KANAN -->
            <div class="p-10 flex flex-col justify-center">

                <h2 class="text-4xl font-bold mb-2">
                    Login
                </h2>

                <p class="text-gray-600 mb-8">
                    Silakan masuk menggunakan akun yang telah diberikan oleh administrator.
                </p>

                <x-auth-session-status
                    class="mb-4"
                    :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">

                    @csrf

                    <div class="mb-5">

                        <label class="block font-semibold mb-2">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            class="w-full border-2 border-black p-3"
                            required
                            autofocus>

                        <x-input-error
                            :messages="$errors->get('email')"
                            class="mt-2" />

                    </div>

                    <div class="mb-5">

                        <label class="block font-semibold mb-2">
                            Password
                        </label>

                        <input
                            type="password"
                            name="password"
                            class="w-full border-2 border-black p-3"
                            required>

                        <x-input-error
                            :messages="$errors->get('password')"
                            class="mt-2" />

                    </div>

                    <div class="flex items-center mb-5">

                        <input
                            type="checkbox"
                            name="remember"
                            id="remember"
                            class="mr-2">

                        <label for="remember">
                            Remember Me
                        </label>

                    </div>

                    @if(Route::has('password.request'))

                    <div class="mb-6">

                        <a href="{{ route('password.request') }}"
                           class="text-[#0078D7] hover:underline">

                            Lupa Password?

                        </a>

                    </div>

                    @endif

                    <button
                        type="submit"
                        class="w-full bg-[#0078D7] text-white border-2 border-black py-3 font-bold hover:opacity-90">

                        LOGIN

                    </button>

                </form>

                <div class="mt-8 text-center text-gray-500 text-sm">

                    © {{ date('Y') }} PKLTrack

                </div>

            </div>

        </div>

    </div>

</body>
</html>

