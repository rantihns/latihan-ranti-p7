<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Beranda') - PT Maja Agung Elektrindo</title>
    
    {{-- Asset Tailwind CSS via NPM (Tanpa CDN) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen">

    {{-- Navbar Sederhana (4 Menu Wajib) --}}
    <nav class="bg-slate-800 text-white shadow">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                
                {{-- Logo / Judul Web --}}
                <a href="{{ route('home') }}" class="font-bold text-lg hover:text-red-400">
                    PT Maja Agung Elektrindo
                    <span class="text-xs block text-gray-400 font-normal">Speaker BlackSpider</span>
                </a>

                {{-- 4 Menu Utama --}}
                <div class="hidden md:flex space-x-2 text-sm font-medium">
                    <a href="{{ route('home') }}" 
                       class="px-3 py-2 rounded hover:bg-slate-700 {{ request()->routeIs('home') ? 'bg-slate-900 text-red-400 font-bold' : '' }}">
                        Beranda
                    </a>
                    <a href="{{ route('about') }}" 
                       class="px-3 py-2 rounded hover:bg-slate-700 {{ request()->routeIs('about') ? 'bg-slate-900 text-red-400 font-bold' : '' }}">
                        Tentang Kami
                    </a>
                    <a href="{{ route('speakers.index') }}" 
                       class="px-3 py-2 rounded hover:bg-slate-700 {{ request()->routeIs('speakers.*') ? 'bg-slate-900 text-red-400 font-bold' : '' }}">
                        Produk Speaker
                    </a>
                    <a href="{{ route('contact') }}" 
                       class="px-3 py-2 rounded hover:bg-slate-700 {{ request()->routeIs('contact') ? 'bg-slate-900 text-red-400 font-bold' : '' }}">
                        Kontak
                    </a>
                </div>

                {{-- Tombol Mobile Menu --}}
                <div class="md:hidden">
                    <button id="btn-toggle" class="p-2 rounded text-gray-300 hover:text-white hover:bg-slate-700">
                        ☰
                    </button>
                </div>
            </div>

            {{-- Navigasi Mobile --}}
            <div id="nav-mobile" class="hidden md:hidden pb-3 pt-1 space-y-1">
                <a href="{{ route('home') }}" class="block px-3 py-2 rounded text-sm hover:bg-slate-700">Beranda</a>
                <a href="{{ route('about') }}" class="block px-3 py-2 rounded text-sm hover:bg-slate-700">Tentang Kami</a>
                <a href="{{ route('speakers.index') }}" class="block px-3 py-2 rounded text-sm hover:bg-slate-700">Produk Speaker</a>
                <a href="{{ route('contact') }}" class="block px-3 py-2 rounded text-sm hover:bg-slate-700">Kontak</a>
            </div>
        </div>
    </nav>

    {{-- Konten Halaman --}}
    <main class="flex-grow max-w-6xl w-full mx-auto px-4 py-8">
        @yield('content')
    </main>

    {{-- Footer Sederhana --}}
    <footer class="bg-slate-800 text-gray-300 text-sm py-6 border-t border-slate-700 mt-10">
        <div class="max-w-6xl mx-auto px-4 text-center space-y-2">
            <p class="font-bold text-white">PT Maja Agung Elektrindo - Distributor Speaker BlackSpider</p>
            <p class="text-xs text-gray-400">Website Company Profile - Tugas Praktikum Rekayasa Web (Pertemuan 7)</p>
            <p class="text-xs text-gray-500">&copy; {{ date('Y') }} Hak Cipta Dilindungi.</p>
        </div>
    </footer>

    <script>
        const btn = document.getElementById('btn-toggle');
        const menu = document.getElementById('nav-mobile');
        if (btn && menu) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        }
    </script>
</body>
</html>
