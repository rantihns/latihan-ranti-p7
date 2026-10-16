@extends('layouts.app')

@section('title', $speaker->name . ' - Detail Produk')

@section('content')
<div class="bg-slate-50 py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Breadcrumb Sederhana --}}
        <nav class="flex items-center gap-2 text-xs text-slate-500 mb-6">
            <a href="{{ route('home') }}" class="hover:text-red-600 transition-colors">Beranda</a>
            <span>/</span>
            <a href="{{ route('speakers.index') }}" class="hover:text-red-600 transition-colors">Produk Speaker BlackSpider</a>
            <span>/</span>
            <span class="text-slate-800 font-semibold truncate">{{ $speaker->name }}</span>
        </nav>

        {{-- Card Detail Produk --}}
        <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm mb-10">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 p-6 sm:p-10">
                
                {{-- Kolom Gambar Produk --}}
                <div class="md:col-span-5 flex flex-col items-center justify-center bg-slate-50 rounded-xl p-6 border border-slate-100">
                    <img src="{{ asset($speaker->image) }}" 
                         alt="{{ $speaker->name }}" 
                         class="max-h-96 max-w-full object-contain drop-shadow-md">
                    <div class="mt-4 text-center">
                        <span class="inline-block bg-slate-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
                            Kategori: {{ $speaker->category }}
                        </span>
                    </div>
                </div>

                {{-- Kolom Spesifikasi & Informasi --}}
                <div class="md:col-span-7 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between gap-4 mb-2">
                            <span class="text-xs font-bold uppercase tracking-wider text-red-600">
                                BlackSpider Original
                            </span>
                            <span class="text-xs text-slate-400 font-mono">
                                Kode ID: #{{ $speaker->id }}
                            </span>
                        </div>

                        <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                            {{ $speaker->name }}
                        </h1>

                        {{-- Harga --}}
                        <div class="mt-4 p-4 rounded-xl bg-red-50 border border-red-100 flex items-center justify-between">
                            <div>
                                <span class="text-xs text-red-600 font-semibold block uppercase">Harga Rekomendasi Konsumen</span>
                                <span class="text-3xl font-black text-red-700">
                                    Rp {{ number_format($speaker->price, 0, ',', '.') }}
                                </span>
                            </div>
                            <span class="bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-md">
                                Garansi Resmi
                            </span>
                        </div>

                        {{-- Deskripsi --}}
                        <div class="mt-6">
                            <h2 class="text-sm font-bold text-slate-800 uppercase tracking-wide mb-2">Deskripsi Produk</h2>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                {{ $speaker->description }}
                            </p>
                        </div>

                        {{-- Tabel Spesifikasi Teknis (Field Database) --}}
                        <div class="mt-6">
                            <h2 class="text-sm font-bold text-slate-800 uppercase tracking-wide mb-3">Spesifikasi Teknis (Database Field)</h2>
                            <div class="overflow-hidden border border-slate-200 rounded-lg">
                                <table class="min-w-full text-xs text-left divide-y divide-slate-200">
                                    <tbody class="divide-y divide-slate-100">
                                        <tr class="bg-slate-50/50">
                                            <td class="px-4 py-2.5 font-semibold text-slate-600 w-1/3">Daya (Power Rating)</td>
                                            <td class="px-4 py-2.5 text-slate-800 font-bold">{{ $speaker->power_rating }}</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2.5 font-semibold text-slate-600">Impedansi Nominal</td>
                                            <td class="px-4 py-2.5 text-slate-800 font-bold">{{ $speaker->impedance }}</td>
                                        </tr>
                                        <tr class="bg-slate-50/50">
                                            <td class="px-4 py-2.5 font-semibold text-slate-600">Respon Frekuensi</td>
                                            <td class="px-4 py-2.5 text-slate-800 font-bold">{{ $speaker->frequency_response }}</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2.5 font-semibold text-slate-600">Kategori / Segmen</td>
                                            <td class="px-4 py-2.5 text-slate-800 font-bold">{{ $speaker->category }}</td>
                                        </tr>
                                        <tr class="bg-slate-50/50">
                                            <td class="px-4 py-2.5 font-semibold text-slate-600">Pabrikan & Distribusi</td>
                                            <td class="px-4 py-2.5 text-slate-800 font-bold">PT Maja Agung Elektrindo</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                    {{-- Tombol Kembali --}}
                    <div class="mt-8 pt-6 border-t border-slate-100 flex items-center justify-between">
                        <a href="{{ route('speakers.index') }}" 
                           class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg border border-slate-300 text-slate-700 font-semibold text-xs hover:bg-slate-100 transition-colors">
                            <span>&larr;</span>
                            <span>Kembali ke Katalog Produk</span>
                        </a>
                        <a href="{{ route('contact') }}" 
                           class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-red-600 hover:bg-red-700 text-white font-semibold text-xs shadow-sm transition-colors">
                            <span>Hubungi Sales / Pesan</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        {{-- Produk Terkait --}}
        @if($relatedSpeakers->isNotEmpty())
            <div>
                <h3 class="text-lg font-bold text-slate-900 mb-4">Produk Lain dalam Kategori {{ $speaker->category }}</h3>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    @foreach($relatedSpeakers as $related)
                        <div class="bg-white rounded-xl border border-slate-200 p-4 shadow-sm hover:shadow-md transition-shadow">
                            <div class="h-40 bg-slate-50 rounded-lg flex items-center justify-center p-3 mb-3">
                                <img src="{{ asset($related->image) }}" alt="{{ $related->name }}" class="max-h-full max-w-full object-contain">
                            </div>
                            <h4 class="font-bold text-sm text-slate-900 line-clamp-1">{{ $related->name }}</h4>
                            <p class="text-xs text-red-600 font-bold mt-1">Rp {{ number_format($related->price, 0, ',', '.') }}</p>
                            <a href="{{ route('speakers.show', $related->id) }}" class="mt-3 block text-center bg-slate-100 hover:bg-slate-200 text-slate-800 text-xs font-semibold py-2 rounded-lg transition-colors">
                                Lihat Produk
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

    </div>
</div>
@endsection
