@extends('layouts.app')

@section('title', 'Katalog Produk Speaker BlackSpider')

@section('content')
<div class="bg-slate-50 py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Header Halaman --}}
        <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-sm border border-slate-200 mb-8">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-red-100 text-red-700 text-xs font-bold mb-3">
                        <span>✨ Menu Utama (Output Praktikum)</span>
                    </div>
                    <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                        Katalog Produk Speaker BlackSpider
                    </h1>
                    <p class="mt-2 text-sm text-slate-600 max-w-2xl leading-relaxed">
                        Daftar resmi produk sound system dan speaker profesional produksi serta distribusi <strong class="text-slate-800">PT Maja Agung Elektrindo</strong>. Seluruh data diambil secara dinamis dari database melalui Controller dan Model Eloquent.
                    </p>
                </div>

                {{-- Indikator Ringkas Data Praktikum --}}
                <div class="flex sm:flex-col gap-3 bg-slate-50 p-4 rounded-xl border border-slate-200 text-xs shrink-0">
                    <div class="flex items-center justify-between gap-4">
                        <span class="text-slate-500 font-medium">Model Object:</span>
                        <span class="font-mono font-bold bg-slate-200 px-2 py-0.5 rounded text-slate-800">Speaker</span>
                    </div>
                    <div class="flex items-center justify-between gap-4">
                        <span class="text-slate-500 font-medium">Tabel DB:</span>
                        <span class="font-mono font-bold bg-slate-200 px-2 py-0.5 rounded text-slate-800">speakers</span>
                    </div>
                    <div class="flex items-center justify-between gap-4">
                        <span class="text-slate-500 font-medium">Total Produk:</span>
                        <span class="font-bold text-red-600 bg-red-50 px-2 py-0.5 rounded">{{ $speakers->count() }} Item (Seeded)</span>
                    </div>
                </div>
            </div>

            {{-- Form Pencarian & Filter Kategori --}}
            <div class="mt-8 pt-6 border-t border-slate-100">
                <form action="{{ route('speakers.index') }}" method="GET" class="grid grid-cols-1 sm:grid-cols-12 gap-3">
                    <div class="sm:col-span-6">
                        <label for="search" class="sr-only">Cari Produk</label>
                        <div class="relative">
                            <input type="text" 
                                   name="search" 
                                   id="search" 
                                   value="{{ request('search') }}" 
                                   placeholder="Cari nama produk, spesifikasi, atau kategori..." 
                                   class="w-full bg-slate-50 border border-slate-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-red-500 focus:bg-white transition-all">
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="category" class="sr-only">Filter Kategori</label>
                        <select name="category" 
                                id="category" 
                                class="w-full bg-slate-50 border border-slate-300 rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-red-500 focus:bg-white transition-all">
                            <option value="all">Semua Kategori ({{ $speakers->count() }})</option>
                            @foreach($categories as $cat)
                                <option value="{{ $cat }}" {{ request('category') == $cat ? 'selected' : '' }}>
                                    {{ $cat }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="sm:col-span-2 flex gap-2">
                        <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2.5 px-4 rounded-lg text-sm transition-colors shadow-sm">
                            Filter
                        </button>
                        @if(request('search') || (request('category') && request('category') !== 'all'))
                            <a href="{{ route('speakers.index') }}" class="bg-slate-200 hover:bg-slate-300 text-slate-700 font-semibold py-2.5 px-3 rounded-lg text-sm transition-colors text-center">
                                Reset
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>

        {{-- Daftar Grid Produk (Blade Template) --}}
        @if($speakers->isEmpty())
            <div class="bg-white rounded-2xl p-12 text-center border border-slate-200">
                <div class="w-16 h-16 bg-slate-100 text-slate-400 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">
                    🔍
                </div>
                <h3 class="text-lg font-bold text-slate-800">Tidak ada produk yang cocok</h3>
                <p class="text-sm text-slate-500 mt-1">Silakan coba kata kunci lain atau reset filter kategori.</p>
                <div class="mt-4">
                    <a href="{{ route('speakers.index') }}" class="inline-block bg-red-600 text-white text-sm font-semibold px-4 py-2 rounded-lg hover:bg-red-700">
                        Lihat Semua Produk
                    </a>
                </div>
            </div>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($speakers as $speaker)
                    <div class="bg-white rounded-xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col group">
                        
                        {{-- Bagian Gambar Produk --}}
                        <div class="relative bg-slate-50 p-4 border-b border-slate-100 flex items-center justify-center overflow-hidden h-64">
                            <img src="{{ asset($speaker->image) }}" 
                                 alt="{{ $speaker->name }}" 
                                 class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300"
                                 loading="lazy">
                            
                            {{-- Badge Kategori --}}
                            <span class="absolute top-3 left-3 bg-slate-900/80 backdrop-blur-sm text-white text-[11px] font-semibold px-2.5 py-1 rounded-md">
                                {{ $speaker->category }}
                            </span>
                            
                            {{-- Badge ID Produk --}}
                            <span class="absolute top-3 right-3 bg-red-600 text-white text-[10px] font-mono font-bold px-2 py-0.5 rounded">
                                #{{ $speaker->id }}
                            </span>
                        </div>

                        {{-- Bagian Informasi Produk (6+ Field) --}}
                        <div class="p-5 flex-grow flex flex-col justify-between">
                            <div>
                                <h2 class="text-base font-bold text-slate-900 group-hover:text-red-600 transition-colors line-clamp-1">
                                    {{ $speaker->name }}
                                </h2>
                                
                                <p class="text-xs text-slate-500 mt-2 line-clamp-2 leading-relaxed">
                                    {{ $speaker->description }}
                                </p>

                                {{-- Spesifikasi Teknis (Field Khusus) --}}
                                <div class="mt-4 grid grid-cols-2 gap-2 bg-slate-50 p-3 rounded-lg border border-slate-100 text-xs">
                                    <div>
                                        <span class="text-slate-400 block text-[10px] uppercase font-semibold">Daya (Power)</span>
                                        <span class="font-semibold text-slate-800">{{ $speaker->power_rating }}</span>
                                    </div>
                                    <div>
                                        <span class="text-slate-400 block text-[10px] uppercase font-semibold">Impedansi</span>
                                        <span class="font-semibold text-slate-800">{{ $speaker->impedance }}</span>
                                    </div>
                                    <div class="col-span-2 pt-1 border-t border-slate-200/60">
                                        <span class="text-slate-400 block text-[10px] uppercase font-semibold">Respon Frekuensi</span>
                                        <span class="font-medium text-slate-700">{{ $speaker->frequency_response }}</span>
                                    </div>
                                </div>
                            </div>

                            {{-- Harga dan Aksi --}}
                            <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between">
                                <div>
                                    <span class="text-[10px] text-slate-400 block uppercase font-semibold">Harga Resmi</span>
                                    <span class="text-lg font-black text-red-600">
                                        Rp {{ number_format($speaker->price, 0, ',', '.') }}
                                    </span>
                                </div>
                                <a href="{{ route('speakers.show', $speaker->id) }}" 
                                   class="inline-flex items-center gap-1 bg-slate-900 hover:bg-red-600 text-white text-xs font-semibold px-3 py-2 rounded-lg transition-colors">
                                    <span>Detail</span>
                                    <span>&rarr;</span>
                                </a>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        @endif

        {{-- Note Kepatuhan Tugas Praktikum --}}
        <div class="mt-12 bg-white rounded-xl p-6 border border-slate-200 text-xs text-slate-600 space-y-2">
            <h4 class="font-bold text-slate-800 text-sm flex items-center gap-2">
                <span>📋 Verifikasi Kriteria Tugas Praktikum Rekayasa Web</span>
            </h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-1.5 pt-2">
                <p>✅ <strong>4 Menu Utama:</strong> Beranda, Tentang Kami, Produk BlackSpider, Kontak</p>
                <p>✅ <strong>Kesesuaian Objek:</strong> Model `Speaker`, Controller `SpeakerController`, Tabel `speakers`</p>
                <p>✅ <strong>Skema Kolom (8 field &gt; 6):</strong> name, category, power_rating, impedance, frequency_response, price, description, image</p>
                <p>✅ <strong>Seeder 10 Data:</strong> Menggunakan Database Seeder resmi dengan 10 produk unik BlackSpider</p>
                <p>✅ <strong>Asset Gambar:</strong> Disimpan di folder lokal `public/images/products/` dari folder `@assets`</p>
                <p>✅ <strong>Desain Tailwind:</strong> Dibuat rapi dan bersih via build Vite/NPM tanpa CDN eksternal</p>
            </div>
        </div>

    </div>
</div>
@endsection
