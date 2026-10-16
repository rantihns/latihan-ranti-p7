@extends('layouts.app')

@section('title', $speaker->name)

@section('content')
<div class="space-y-6">

    {{-- Tombol Kembali --}}
    <div>
        <a href="{{ route('speakers.index') }}" class="text-sm text-red-600 hover:underline inline-flex items-center gap-1 font-medium">
            &larr; Kembali ke Daftar Produk Speaker
        </a>
    </div>

    {{-- Detail Card --}}
    <div class="bg-white rounded-lg border border-gray-200 p-6 shadow-sm">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
            
            {{-- Foto Produk --}}
            <div class="bg-gray-50 rounded-lg border border-gray-200 p-6 flex items-center justify-center h-80">
                <img src="{{ asset($speaker->image) }}" alt="{{ $speaker->name }}" class="max-h-full max-w-full object-contain">
            </div>

            {{-- Informasi Detail --}}
            <div class="space-y-4">
                <div>
                    <span class="inline-block bg-gray-100 text-gray-700 text-xs px-2.5 py-1 rounded font-medium">
                        Kategori: {{ $speaker->category }}
                    </span>
                    <h1 class="text-2xl font-bold text-gray-900 mt-2">
                        {{ $speaker->name }}
                    </h1>
                </div>

                {{-- Harga --}}
                <div class="bg-red-50 border border-red-100 p-3 rounded">
                    <span class="text-xs text-red-600 block">Harga Produk:</span>
                    <span class="text-2xl font-bold text-red-700">
                        Rp {{ number_format($speaker->price, 0, ',', '.') }}
                    </span>
                </div>

                {{-- Deskripsi --}}
                <div>
                    <h3 class="font-bold text-sm text-gray-800">Deskripsi:</h3>
                    <p class="text-sm text-gray-600 mt-1 leading-relaxed">
                        {{ $speaker->description }}
                    </p>
                </div>

                {{-- Tabel Spesifikasi (Field Database) --}}
                <div>
                    <h3 class="font-bold text-sm text-gray-800 mb-2">Spesifikasi Lengkap:</h3>
                    <table class="w-full text-xs border border-gray-200 rounded">
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="p-2.5 bg-gray-50 font-medium text-gray-600 w-1/3">Daya (Power)</td>
                                <td class="p-2.5 text-gray-800">{{ $speaker->power_rating }}</td>
                            </tr>
                            <tr>
                                <td class="p-2.5 bg-gray-50 font-medium text-gray-600">Impedansi</td>
                                <td class="p-2.5 text-gray-800">{{ $speaker->impedance }}</td>
                            </tr>
                            <tr>
                                <td class="p-2.5 bg-gray-50 font-medium text-gray-600">Respon Frekuensi</td>
                                <td class="p-2.5 text-gray-800">{{ $speaker->frequency_response }}</td>
                            </tr>
                            <tr>
                                <td class="p-2.5 bg-gray-50 font-medium text-gray-600">Kategori</td>
                                <td class="p-2.5 text-gray-800">{{ $speaker->category }}</td>
                            </tr>
                            <tr>
                                <td class="p-2.5 bg-gray-50 font-medium text-gray-600">Perusahaan</td>
                                <td class="p-2.5 text-gray-800">PT Maja Agung Elektrindo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                {{-- Hubungi Kami --}}
                <div class="pt-2">
                    <a href="{{ route('contact') }}" class="bg-slate-800 hover:bg-slate-700 text-white text-xs font-medium px-4 py-2 rounded inline-block">
                        Hubungi Kami untuk Pemesanan &rarr;
                    </a>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
