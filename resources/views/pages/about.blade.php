@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<div class="space-y-6">

    {{-- Profil Perusahaan Sederhana --}}
    <div class="bg-white rounded-lg border border-gray-200 p-6 sm:p-8 shadow-sm">
        <h1 class="text-2xl font-bold text-gray-900 mb-2">
            Profil PT Maja Agung Elektrindo
        </h1>
        <p class="text-sm text-gray-600 leading-relaxed">
            <strong>PT Maja Agung Elektrindo</strong> adalah perusahaan yang bergerak di bidang perakitan dan distribusi peralatan audio serta sound system profesional di Indonesia. Salah satu merk speaker unggulan kami yang sudah sangat dikenal luas adalah <strong>BlackSpider</strong>.
        </p>
        <p class="text-sm text-gray-600 leading-relaxed mt-3">
            Produk speaker BlackSpider banyak digunakan untuk sound system lapangan, panggung pertunjukan, acara hajatan, ruang karaoke, aula sekolah, hingga sound sistem tempat ibadah karena kualitas suaranya yang kuat dan harganya yang ramah di kantong.
        </p>
    </div>

    {{-- Visi dan Misi --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white rounded-lg border border-gray-200 p-6 shadow-sm">
            <h2 class="text-lg font-bold text-gray-900 mb-3 text-red-600">
                Visi Kami
            </h2>
            <p class="text-sm text-gray-600 leading-relaxed">
                Menjadi penyedia solusi speaker dan sound system terpercaya di Indonesia yang memberikan kualitas audio maksimal dengan harga yang terjangkau bagi seluruh masyarakat.
            </p>
        </div>

        <div class="bg-white rounded-lg border border-gray-200 p-6 shadow-sm">
            <h2 class="text-lg font-bold text-gray-900 mb-3 text-red-600">
                Misi Kami
            </h2>
            <ul class="text-sm text-gray-600 space-y-2 list-disc list-inside">
                <li>Menghadirkan produk speaker BlackSpider yang awet dan tahan lama.</li>
                <li>Menjaga kontrol kualitas (Quality Control) pada setiap produk audio.</li>
                <li>Memberikan pelayanan terbaik dan ketersediaan stok yang memadai.</li>
                <li>Menjalin kerjasama yang baik dengan mitra toko audio di berbagai daerah.</li>
            </ul>
        </div>
    </div>

    {{-- Info Brand BlackSpider --}}
    <div class="bg-white rounded-lg border border-gray-200 p-6 shadow-sm">
        <h2 class="text-lg font-bold text-gray-900 mb-2">
            Mengenal Merk Speaker BlackSpider
        </h2>
        <p class="text-sm text-gray-600 leading-relaxed">
            BlackSpider menyediakan berbagai tipe speaker, mulai dari box speaker pasif, subwoofer aktif berdaya besar, speaker portable dengan baterai, hingga komponen driver woofer lepasan (ukuran 6.5 inch, 8 inch, 10 inch, dan 15 inch).
        </p>
        <div class="mt-4">
            <a href="{{ route('speakers.index') }}" class="inline-block bg-red-600 hover:bg-red-700 text-white text-xs font-medium px-4 py-2 rounded transition">
                Lihat Katalog Produk Kami &rarr;
            </a>
        </div>
    </div>

</div>
@endsection
