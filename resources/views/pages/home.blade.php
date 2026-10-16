@extends('layouts.app')

@section('title', 'Beranda - PT Maja Agung Elektrindo')

@section('content')
<div>
    {{-- Hero Section Sederhana & Elegan --}}
    <section class="bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 text-white py-16 sm:py-24 border-b border-slate-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-7 space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-red-600/20 text-red-400 border border-red-500/30 text-xs font-semibold">
                        <span>🔊 Produsen & Perakitan Speaker BlackSpider</span>
                    </div>

                    <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight">
                        PT Maja Agung Elektrindo
                    </h1>

                    <p class="text-base sm:text-lg text-slate-300 max-w-xl leading-relaxed">
                        Spesialis sound system dan speaker profesional terpercaya di Indonesia. Kami menghadirkan suara berkualitas tinggi, bertenaga, dan tahan lama melalui merk unggulan kami: <span class="text-red-400 font-bold">BlackSpider</span>.
                    </p>

                    <div class="flex flex-wrap gap-4 pt-2">
                        <a href="{{ route('speakers.index') }}" 
                           class="bg-red-600 hover:bg-red-700 text-white font-bold px-6 py-3 rounded-xl text-sm transition-colors shadow-lg shadow-red-600/30 flex items-center gap-2">
                            <span>Jelajahi Produk Kami (Menu 3)</span>
                            <span>&rarr;</span>
                        </a>
                        <a href="{{ route('about') }}" 
                           class="bg-slate-800 hover:bg-slate-700 text-slate-200 border border-slate-700 font-semibold px-6 py-3 rounded-xl text-sm transition-colors">
                            Tentang Perusahaan
                        </a>
                    </div>

                    <div class="pt-6 border-t border-slate-800 grid grid-cols-3 gap-4 text-center sm:text-left">
                        <div>
                            <div class="text-2xl font-black text-red-400">100%</div>
                            <div class="text-xs text-slate-400 mt-1">Produk Original</div>
                        </div>
                        <div>
                            <div class="text-2xl font-black text-red-400">10+</div>
                            <div class="text-xs text-slate-400 mt-1">Varian Model</div>
                        </div>
                        <div>
                            <div class="text-2xl font-black text-red-400">Nasional</div>
                            <div class="text-xs text-slate-400 mt-1">Jangkauan Distribusi</div>
                        </div>
                    </div>
                </div>

                {{-- Hero Banner Visual --}}
                <div class="lg:col-span-5 flex justify-center">
                    <div class="relative bg-gradient-to-tr from-slate-800 to-slate-700 p-8 rounded-3xl border border-slate-600 shadow-2xl max-w-sm w-full">
                        <div class="absolute -top-3 -right-3 bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow">
                            Top Choice
                        </div>
                        <div class="h-64 flex items-center justify-center p-4">
                            @if(isset($featuredSpeakers[0]))
                                <img src="{{ asset($featuredSpeakers[0]->image) }}" 
                                     alt="BlackSpider Speaker" 
                                     class="max-h-full max-w-full object-contain filter drop-shadow-xl">
                            @else
                                <div class="text-slate-400 text-sm">BlackSpider Professional Speaker</div>
                            @endif
                        </div>
                        <div class="mt-4 pt-4 border-t border-slate-600/60 text-center">
                            <span class="text-xs text-slate-400 uppercase font-semibold tracking-wider">Merk Kebanggaan</span>
                            <h3 class="text-xl font-black text-white mt-0.5">BlackSpider Audio Pro</h3>
                            <p class="text-xs text-slate-300 mt-1">Kuat, Jernih, Bass Bertenaga</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- 3 Nilai Keunggulan Perusahaan --}}
    <section class="py-16 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <h2 class="text-xs font-bold uppercase tracking-wider text-red-600">Mengapa Memilih Kami</h2>
                <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-1">
                    Standar Kualitas PT Maja Agung Elektrindo
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 space-y-3">
                    <div class="w-12 h-12 rounded-xl bg-red-100 text-red-600 flex items-center justify-center text-xl font-bold">
                        ⚡
                    </div>
                    <h4 class="text-lg font-bold text-slate-900">Material & Driver Unggulan</h4>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Voice coil berkualitas tinggi dan magnet ferrite berdensitas tinggi untuk menghasilkan daya output optimal tanpa distorsi pada volume tinggi.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 space-y-3">
                    <div class="w-12 h-12 rounded-xl bg-red-100 text-red-600 flex items-center justify-center text-xl font-bold">
                        🛡️
                    </div>
                    <h4 class="text-lg font-bold text-slate-900">Garansi & Layanan Purna Jual</h4>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Seluruh produk didukung jaminan servis resmi dari PT Maja Agung Elektrindo dengan ketersediaan suku cadang dan tim teknisi berpengalaman.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 space-y-3">
                    <div class="w-12 h-12 rounded-xl bg-red-100 text-red-600 flex items-center justify-center text-xl font-bold">
                        🤝
                    </div>
                    <h4 class="text-lg font-bold text-slate-900">Harga Kompetitif & Terjangkau</h4>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Diproduksi secara efisien sehingga memberikan harga terbaik bagi para pelaku usaha rental sound, instalasi sound tempat ibadah, maupun karaoke.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Produk Unggulan Preview (Dari Database) --}}
    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-8 gap-4">
                <div>
                    <h2 class="text-xs font-bold uppercase tracking-wider text-red-600">Highlight Katalog</h2>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-1">
                        Produk Unggulan BlackSpider
                    </h3>
                </div>
                <a href="{{ route('speakers.index') }}" class="text-sm font-bold text-red-600 hover:text-red-700 flex items-center gap-1">
                    <span>Lihat Semua Produk ({{ \App\Models\Speaker::count() }} Item)</span>
                    <span>&rarr;</span>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($featuredSpeakers as $speaker)
                    <div class="bg-white rounded-xl border border-slate-200 p-5 shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between">
                        <div>
                            <div class="h-48 bg-slate-50 rounded-lg flex items-center justify-center p-4 mb-4">
                                <img src="{{ asset($speaker->image) }}" alt="{{ $speaker->name }}" class="max-h-full max-w-full object-contain">
                            </div>
                            <span class="text-[11px] font-semibold text-slate-500 uppercase">{{ $speaker->category }}</span>
                            <h4 class="font-bold text-base text-slate-900 mt-1">{{ $speaker->name }}</h4>
                            <p class="text-xs text-slate-500 mt-2 line-clamp-2">{{ $speaker->description }}</p>
                        </div>
                        <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                            <span class="font-bold text-red-600 text-sm">Rp {{ number_format($speaker->price, 0, ',', '.') }}</span>
                            <a href="{{ route('speakers.show', $speaker->id) }}" class="text-xs font-semibold text-slate-900 hover:text-red-600">
                                Detail &rarr;
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA Banner Sederhana --}}
    <section class="bg-red-600 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
            <h3 class="text-2xl font-extrabold tracking-tight">Butuh Solusi Audio untuk Proyek atau Tempat Usaha Anda?</h3>
            <p class="text-red-100 max-w-xl mx-auto text-sm">
                Konsultasikan kebutuhan sound system Anda dengan tim ahli PT Maja Agung Elektrindo sekarang juga.
            </p>
            <div class="pt-2">
                <a href="{{ route('contact') }}" class="inline-block bg-white text-red-600 hover:bg-slate-100 font-bold px-6 py-3 rounded-xl text-sm transition-colors shadow">
                    Hubungi Kami (Menu 4)
                </a>
            </div>
        </div>
    </section>
</div>
@endsection
