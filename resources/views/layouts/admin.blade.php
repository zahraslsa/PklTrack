<!DOCTYPE html>
<html>
<head>
    <title>PKLTrack Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#F0F0F0]">

<div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-72 bg-white border-r border-black">

        <!-- Header -->
        <div class="bg-[#0078D7] text-white px-5 py-4 border-b border-black">

            <h1 class="text-2xl font-bold">
                PKLTrack
            </h1>

            <p class="text-sm opacity-90">
                Administrator Panel
            </p>

        </div>

        <!-- Menu -->
        <div class="p-4">

            <ul class="space-y-2">

                <li>
                    <a href="/admin/dashboard"
                       class="block border border-black bg-white px-4 py-2 hover:bg-[#0078D7] hover:text-white transition">
                        Dashboard
                    </a>
                </li>

                <li>
                    <a href="/siswa"
                       class="block border border-black bg-white px-4 py-2 hover:bg-[#0078D7] hover:text-white transition">
                        Data Siswa
                    </a>
                </li>

                <li>
                    <a href="/guru"
                       class="block border border-black bg-white px-4 py-2 hover:bg-[#0078D7] hover:text-white transition">
                        Data Guru
                    </a>
                </li>

                <li>
                    <a href="/tempat-pkl"
                       class="block border border-black bg-white px-4 py-2 hover:bg-[#0078D7] hover:text-white transition">
                        Tempat PKL
                    </a>
                </li>

                <li>
                    <a href="/penempatan"
                       class="block border border-black bg-white px-4 py-2 hover:bg-[#0078D7] hover:text-white transition">
                        Kelompok PKL
                    </a>
                </li>

                <li>
                    <a href="/monitoring"
                       class="block border border-black bg-white px-4 py-2 hover:bg-[#0078D7] hover:text-white transition">
                        Monitoring PKL
                    </a>
                </li>

                <li>
                    <a href="/admin/laporan"
                       class="block border border-black bg-white px-4 py-2 hover:bg-[#0078D7] hover:text-white transition">
                        Laporan PKL
                    </a>
                </li>

                <li>
                    <a href="/nilai"
                       class="block border border-black bg-white px-4 py-2 hover:bg-[#0078D7] hover:text-white transition">
                        Nilai PKL
                    </a>
                </li>

            </ul>

            <div class="mt-8">

                <form method="POST" action="/logout">
                    @csrf

                    <button
                        class="w-full bg-[#E81123] text-white border border-black px-4 py-2 hover:brightness-90">
                        Logout
                    </button>

                </form>

            </div>

        </div>

    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">

        <!-- Window Style -->
        <div class="border border-black bg-white">

            <!-- Window Header -->
            <div class="bg-[#0078D7] text-white px-4 py-2 border-b border-black flex justify-between">

                <span>
                    PKLTrack Management System
                </span>

                <div class="flex gap-1">

                    <div class="w-4 h-4 bg-white border border-black"></div>
                    <div class="w-4 h-4 bg-white border border-black"></div>
                    <div class="w-4 h-4 bg-red-500 border border-black"></div>

                </div>

            </div>

            <!-- Content -->
            <div class="p-6">

                @yield('content')

            </div>

        </div>

    </main>

</div>

</body>
</html>