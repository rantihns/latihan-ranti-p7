<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Beranda') - PT Maja Agung Elektrindo | BlackSpider Audio</title>
    
    {{-- Asset Tailwind CSS lokal hasil build NPM (Tanpa CDN) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-800 flex flex-col min-h-screen font-sans antialiased">

    {{-- Top Bar Info --}}
    <div class="bg-slate-900 text-slate-300 text-xs py-2 px-4 border-b border-slate-800">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
            <div>
                <span class="text-red-400 font-semibold">PT Maja Agung Elektrindo</span> &bull; Distributor & Manufaktur Resmi Speaker BlackSpider
            </div>
            <div class="flex items-center gap-4 text-xs">
                <span>📍 Indonesia</span>
                <span>📞 (031) 8989-1234</span>
                <span>✉️ info@majaagung.co.id</span>
            </div>
        </div>
    </div>

    {{-- Main Navbar (4 Menu Wajib) --}}
    <header class="bg-white shadow-sm sticky top-0 z-50 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                
                {{-- Brand Logo --}}
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="w-12 h-12 rounded-xl bg-red-600 text-white flex items-center justify-center font-black text-xl shadow-md shadow-red-200 group-hover:scale-105 transition-transform">
                        BS
                    </div>
                    <div>
                        <div class="font-bold text-lg text-slate-900 tracking-tight leading-none group-hover:text-red-600 transition-colors">
                            BLACKSPIDER
                        </div>
                        <div class="text-xs text-slate-500 font-medium tracking-wide">
                            PT Maja Agung Elektrindo
                        </div>
                    </div>
                </a>

                {{-- Desktop Navigation (4 Menu Wajib Sesuai Ketentuan) --}}
                <nav class="hidden md:flex items-center gap-1">
                    {{-- Menu 1: Beranda --}}
                    <a href="{{ route('home') }}" 
                       class="px-4 py-2 rounded-lg text-sm font-semibold transition-colors {{ request()->routeIs('home') ? 'bg-red-600 text-white shadow-sm' : 'text-slate-700 hover:bg-slate-100 hover:text-red-600' }}">
                        1. Beranda
                    </a>

                    {{-- Menu 2: Tentang Kami --}}
                    <a href="{{ route('about') }}" 
                       class="px-4 py-2 rounded-lg text-sm font-semibold transition-colors {{ request()->routeIs('about') ? 'bg-red-600 text-white shadow-sm' : 'text-slate-700 hover:bg-slate-100 hover:text-red-600' }}">
                        2. Tentang Kami
                    </a>

                    {{-- Menu 3: Produk (Data Database) --}}
                    <a href="{{ route('speakers.index') }}" 
                       class="px-4 py-2 rounded-lg text-sm font-semibold transition-colors flex items-center gap-1.5 {{ request()->routeIs('speakers.*') ? 'bg-red-600 text-white shadow-sm' : 'text-slate-700 hover:bg-slate-100 hover:text-red-600' }}">
                        <span>3. Produk BlackSpider</span>
                        <span class="inline-block text-[10px] px-1.5 py-0.5 rounded-full {{ request()->routeIs('speakers.*') ? 'bg-white text-red-600' : 'bg-red-100 text-red-700' }} font-bold">
                            Tugas
                        </span>
                    </a>

                    {{-- Menu 4: Kontak --}}
                    <a href="{{ route('contact') }}" 
                       class="px-4 py-2 rounded-lg text-sm font-semibold transition-colors {{ request()->routeIs('contact') ? 'bg-red-600 text-white shadow-sm' : 'text-slate-700 hover:bg-slate-100 hover:text-red-600' }}">
                        4. Kontak
                    </a>
                </nav>

                {{-- Mobile Menu Button --}}
                <div class="md:hidden">
                    <button type="button" id="mobile-menu-btn" class="p-2 rounded-lg text-slate-600 hover:bg-slate-100 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        {{-- Mobile Nav Menu (4 Menu) --}}
        <div id="mobile-menu" class="hidden md:hidden border-t border-slate-200 bg-white px-4 pt-2 pb-4 space-y-1">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('home') ? 'bg-red-600 text-white' : 'text-slate-700 hover:bg-slate-100' }}">
                1. Beranda
            </a>
            <a href="{{ route('about') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('about') ? 'bg-red-600 text-white' : 'text-slate-700 hover:bg-slate-100' }}">
                2. Tentang Kami
            </a>
            <a href="{{ route('speakers.index') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('speakers.*') ? 'bg-red-600 text-white' : 'text-slate-700 hover:bg-slate-100' }}">
                3. Produk BlackSpider (Tugas)
            </a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('contact') ? 'bg-red-600 text-white' : 'text-slate-700 hover:bg-slate-100' }}">
                4. Kontak
            </a>
        </div>
    </header>

    {{-- Main Page Content --}}
    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-slate-900 text-slate-300 mt-16 border-t-4 border-red-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                
                {{-- Col 1: Perusahaan --}}
                <div class="space-y-4">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-lg bg-red-600 text-white flex items-center justify-center font-bold text-sm">
                            BS
                        </div>
                        <span class="text-white font-bold text-lg tracking-wide">BLACKSPIDER</span>
                    </div>
                    <p class="text-sm text-slate-400 leading-relaxed">
                        PT Maja Agung Elektrindo adalah perusahaan manufaktur dan perakitan speaker profesional merk BlackSpider terkemuka di Indonesia, mengutamakan performa suara tangguh dan kejernihan audio.
                    </p>
                </div>

                {{-- Col 2: 4 Menu Cepat --}}
                <div>
                    <h3 class="text-white font-semibold text-sm uppercase tracking-wider mb-4">Navigasi Menu (4 Menu)</h3>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li><a href="{{ route('home') }}" class="hover:text-red-400 transition-colors">1. Beranda</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-red-400 transition-colors">2. Tentang Kami</a></li>
                        <li><a href="{{ route('speakers.index') }}" class="hover:text-red-400 transition-colors">3. Produk Speaker BlackSpider</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-red-400 transition-colors">4. Kontak & Lokasi</a></li>
                    </ul>
                </div>

                {{-- Col 3: Kategori Produk --}}
                <div>
                    <h3 class="text-white font-semibold text-sm uppercase tracking-wider mb-4">Lini Produk Unggulan</h3>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li>• Subwoofer Aktif Panggung</li>
                        <li>• Box Speaker Pasif Dua Arah</li>
                        <li>• Komponen Woofer 10", 15", & Mid-Bass</li>
                        <li>• Portable Speaker Bluetooth</li>
                        <li>• Sistem Audio Karaoke Keluarga</li>
                    </ul>
                </div>

                {{-- Col 4: Informasi Kontak --}}
                <div>
                    <h3 class="text-white font-semibold text-sm uppercase tracking-wider mb-4">Kantor & Workshop</h3>
                    <div class="text-sm text-slate-400 space-y-2">
                        <p class="font-medium text-slate-200">PT Maja Agung Elektrindo</p>
                        <p>Kawasan Industri & Pergudangan Terpadu Blok B No. 12-15</p>
                        <p>Jawa Timur, Indonesia</p>
                        <p class="pt-2">Telepon: (031) 8989-1234</p>
                        <p>Email: sales@majaagung.co.id</p>
                    </div>
                </div>

            </div>

            <div class="mt-12 pt-8 border-t border-slate-800 text-center text-xs text-slate-500 flex flex-col sm:flex-row justify-between items-center gap-4">
                <p>&copy; 2026 PT Maja Agung Elektrindo - BlackSpider Professional Audio. Seluruh Hak Cipta Dilindungi.</p>
                <p class="text-slate-400 font-mono">Tugas Praktikum Rekayasa Web - Pertemuan 7</p>
            </div>
        </div>
    </footer>

    {{-- Script Sederhana untuk Mobile Toggle --}}
    <script>
        document.getElementById('mobile-menu-btn')?.addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
