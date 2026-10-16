@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="space-y-8">

    {{-- Banner Jumbotron Sederhana --}}
    <div class="bg-white rounded-lg border border-gray-200 p-8 shadow-sm text-center md:text-left md:flex items-center justify-between gap-6">
        <div class="space-y-3 max-w-xl">
            <span class="inline-block bg-red-100 text-red-700 text-xs font-semibold px-2.5 py-1 rounded">
                Official Company Profile
            </span>
            <h1 class="text-3xl font-bold text-gray-900">
                Selamat Datang di PT Maja Agung Elektrindo
            </h1>
            <p class="text-gray-600 text-sm leading-relaxed">
                Kami adalah perusahaan yang bergerak di bidang penyediaan sound system dan speaker profesional dengan merk andalan <strong>BlackSpider</strong>. Kami melayani kebutuhan audio panggung, aula, tempat ibadah, karaoke, dan komponen audio berkualitas.
            </p>
            <div class="pt-2 flex flex-wrap gap-3 justify-center md:justify-start">
                <a href="{{ route('speakers.index') }}" class="bg-red-600 hover:bg-red-700 text-white font-medium px-4 py-2 rounded text-sm transition">
                    Lihat Produk Speaker
                </a>
                <a href="{{ route('about') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium px-4 py-2 rounded text-sm transition border border-gray-300">
                    Tentang Kami
                </a>
            </div>
        </div>

        {{-- Gambar Sampel --}}
        <div class="mt-6 md:mt-0 flex justify-center">
            <div class="w-64 h-64 bg-gray-50 border border-gray-200 rounded-lg p-4 flex items-center justify-center">
                @if(isset($featuredSpeakers[0]))
                    <img src="{{ asset($featuredSpeakers[0]->image) }}" alt="BlackSpider Speaker" class="max-h-full max-w-full object-contain">
                @endif
            </div>
        </div>
    </div>

    {{-- 3 Kolom Keunggulan Sederhana --}}
    <div>
        <h2 class="text-xl font-bold text-gray-800 mb-4 text-center">Keunggulan Perusahaan Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-5 rounded-lg border border-gray-200 shadow-sm text-center">
                <div class="text-3xl mb-2">🔊</div>
                <h3 class="font-bold text-gray-800 mb-1">Suara Berkualitas</h3>
                <p class="text-xs text-gray-600">
                    Speaker BlackSpider dirancang untuk menghasilkan suara yang jernih, vokal bulat, dan bass yang bertenaga.
                </p>
            </div>
            <div class="bg-white p-5 rounded-lg border border-gray-200 shadow-sm text-center">
                <div class="text-3xl mb-2">🏷️</div>
                <h3 class="font-bold text-gray-800 mb-1">Harga Terjangkau</h3>
                <p class="text-xs text-gray-600">
                    Kami menawarkan harga yang kompetitif dan bersahabat untuk para pelaku usaha rental sound dan pengguna langsung.
                </p>
            </div>
            <div class="bg-white p-5 rounded-lg border border-gray-200 shadow-sm text-center">
                <div class="text-3xl mb-2">🛡️</div>
                <h3 class="font-bold text-gray-800 mb-1">Kualitas Terjamin</h3>
                <p class="text-xs text-gray-600">
                    Semua unit melewati proses uji coba (Quality Control) ketat sebelum dipasarkan ke konsumen.
                </p>
            </div>
        </div>
    </div>

    {{-- Cuplikan Produk --}}
    <div>
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold text-gray-800">Contoh Produk Speaker</h2>
            <a href="{{ route('speakers.index') }}" class="text-sm text-red-600 hover:underline font-medium">
                Lihat Semua &rarr;
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($featuredSpeakers as $item)
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm hover:shadow transition">
                    <div class="h-44 bg-gray-50 rounded flex items-center justify-center p-2 mb-3">
                        <img src="{{ asset($item->image) }}" alt="{{ $item->name }}" class="max-h-full max-w-full object-contain">
                    </div>
                    <span class="text-[11px] bg-gray-100 text-gray-600 px-2 py-0.5 rounded">{{ $item->category }}</span>
                    <h3 class="font-bold text-sm text-gray-900 mt-2">{{ $item->name }}</h3>
                    <p class="text-xs text-red-600 font-bold mt-1">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                    <a href="{{ route('speakers.show', $item->id) }}" class="mt-3 block text-center bg-gray-800 hover:bg-gray-700 text-white text-xs py-2 rounded">
                        Lihat Detail
                    </a>
                </div>
            @endforeach
        </div>
    </div>

</div>
@endsection
