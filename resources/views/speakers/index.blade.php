@extends('layouts.app')

@section('title', 'Katalog Produk Speaker')

@section('content')
<div class="space-y-6">

    {{-- Judul Halaman Sederhana --}}
    <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
        <h1 class="text-2xl font-bold text-gray-900">
            Daftar Produk Speaker BlackSpider
        </h1>
        <p class="text-gray-600 text-sm mt-1">
            Data produk speaker resmi dari PT Maja Agung Elektrindo yang tersimpan di dalam database.
        </p>

        {{-- Form Pencarian & Filter Kategori Sederhana --}}
        <form action="{{ route('speakers.index') }}" method="GET" class="mt-4 flex flex-col sm:flex-row gap-2">
            <input type="text" 
                   name="search" 
                   value="{{ request('search') }}" 
                   placeholder="Cari nama atau tipe speaker..." 
                   class="border border-gray-300 rounded px-3 py-2 text-sm flex-grow focus:outline-none focus:border-red-500">
            
            <select name="category" class="border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:border-red-500">
                <option value="all">Semua Kategori</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat }}" {{ request('category') == $cat ? 'selected' : '' }}>
                        {{ $cat }}
                    </option>
                @endforeach
            </select>

            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-medium px-4 py-2 rounded text-sm transition">
                Cari
            </button>

            @if(request('search') || (request('category') && request('category') !== 'all'))
                <a href="{{ route('speakers.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-3 py-2 rounded text-sm text-center">
                    Reset
                </a>
            @endif
        </form>
    </div>

    {{-- Grid Produk --}}
    @if($speakers->isEmpty())
        <div class="bg-white p-8 text-center rounded-lg border border-gray-200">
            <p class="text-gray-500 text-sm">Tidak ada data speaker yang ditemukan.</p>
            <a href="{{ route('speakers.index') }}" class="inline-block mt-3 text-red-600 text-sm hover:underline">
                Tampilkan Semua Data
            </a>
        </div>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($speakers as $speaker)
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm flex flex-col justify-between hover:border-gray-300 transition">
                    
                    <div>
                        {{-- Foto Speaker --}}
                        <div class="h-48 bg-gray-50 rounded border border-gray-100 flex items-center justify-center p-3 mb-3">
                            <img src="{{ asset($speaker->image) }}" alt="{{ $speaker->name }}" class="max-h-full max-w-full object-contain">
                        </div>

                        {{-- Kategori & Nama --}}
                        <span class="inline-block bg-gray-100 text-gray-700 text-xs px-2 py-0.5 rounded font-medium">
                            {{ $speaker->category }}
                        </span>
                        
                        <h2 class="font-bold text-gray-900 text-base mt-2">
                            {{ $speaker->name }}
                        </h2>

                        {{-- Spesifikasi Ringkas (Field Database) --}}
                        <div class="mt-3 bg-gray-50 p-2.5 rounded text-xs space-y-1 text-gray-600 border border-gray-100">
                            <div><strong>Daya:</strong> {{ $speaker->power_rating }}</div>
                            <div><strong>Impedansi:</strong> {{ $speaker->impedance }}</div>
                            <div><strong>Respon:</strong> {{ $speaker->frequency_response }}</div>
                        </div>

                        {{-- Deskripsi Singkat --}}
                        <p class="text-xs text-gray-500 mt-2.5 line-clamp-2">
                            {{ $speaker->description }}
                        </p>
                    </div>

                    {{-- Harga & Tombol --}}
                    <div class="mt-4 pt-3 border-t border-gray-100 flex items-center justify-between">
                        <div>
                            <span class="text-[10px] text-gray-400 block">Harga</span>
                            <span class="text-red-600 font-bold text-sm">
                                Rp {{ number_format($speaker->price, 0, ',', '.') }}
                            </span>
                        </div>
                        <a href="{{ route('speakers.show', $speaker->id) }}" 
                           class="bg-slate-800 hover:bg-slate-700 text-white text-xs font-medium px-3 py-1.5 rounded transition">
                            Lihat Detail
                        </a>
                    </div>

                </div>
            @endforeach
        </div>
    @endif

    {{-- Keterangan Total Data --}}
    <div class="bg-white p-4 rounded-lg border border-gray-200 text-xs text-gray-500 flex justify-between items-center">
        <span>Menampilkan <strong>{{ $speakers->count() }}</strong> data produk speaker BlackSpider.</span>
        <span>Objek: <code>Speaker</code> (Tabel: <code>speakers</code>)</span>
    </div>

</div>
@endsection
