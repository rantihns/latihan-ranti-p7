@extends('layouts.app')

@section('title', 'Tentang Kami - Profil PT Maja Agung Elektrindo')

@section('content')
<div class="bg-slate-50 py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">

        {{-- Header Banner --}}
        <div class="bg-white rounded-2xl p-8 sm:p-12 border border-slate-200 shadow-sm">
            <span class="text-xs font-bold uppercase tracking-wider text-red-600">Company Profile</span>
            <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mt-2">
                PT Maja Agung Elektrindo
            </h1>
            <p class="mt-4 text-base text-slate-600 max-w-3xl leading-relaxed">
                PT Maja Agung Elektrindo merupakan perusahaan manufaktur, perakitan, dan distribusi peralatan audio serta sound system profesional di Indonesia. Dikenal luas melalui merk kebanggaan <strong class="text-slate-900">BlackSpider</strong>, kami berkomitmen menghadirkan kualitas audio bertenaga dengan ketahanan komponen tinggi untuk berbagai kebutuhan industri hiburan, komersial, panggung, dan rumah ibadah.
            </p>
        </div>

        {{-- Visi & Misi --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-2xl p-8 border border-slate-200 shadow-sm space-y-4">
                <div class="w-12 h-12 rounded-xl bg-red-100 text-red-600 flex items-center justify-center text-xl font-bold">
                    🎯
                </div>
                <h2 class="text-xl font-bold text-slate-900">Visi Perusahaan</h2>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Menjadi produsen dan mitra penyedia solusi audio & sound system profesional terkemuka di Indonesia yang diakui atas keunggulan kualitas suara, ketahanan produk, dan inovasi yang terjangkau bagi seluruh lapisan masyarakat.
                </p>
            </div>

            <div class="bg-white rounded-2xl p-8 border border-slate-200 shadow-sm space-y-4">
                <div class="w-12 h-12 rounded-xl bg-red-100 text-red-600 flex items-center justify-center text-xl font-bold">
                    🚀
                </div>
                <h2 class="text-xl font-bold text-slate-900">Misi Perusahaan</h2>
                <ul class="text-sm text-slate-600 space-y-2.5">
                    <li class="flex items-start gap-2">
                        <span class="text-red-600 font-bold">•</span>
                        <span>Memproduksi dan merakit komponen speaker berkualitas dengan standar kontrol mutu (Quality Control) yang ketat.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-red-600 font-bold">•</span>
                        <span>Menyediakan produk speaker merk BlackSpider dengan harga yang kompetitif bagi industri rental audio, aula pertemuan, dan pengguna rumahan.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-red-600 font-bold">•</span>
                        <span>Membangun jaringan purna jual dan ketersediaan suku cadang resmi di seluruh kota besar di Indonesia.</span>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Mengenal Brand BlackSpider --}}
        <div class="bg-slate-900 text-white rounded-2xl p-8 sm:p-12 shadow-md">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-8 space-y-4">
                    <div class="inline-block bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-md">
                        Brand Identity
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-extrabold tracking-tight">
                        Merk Speaker BlackSpider: Kekuatan & Kejernihan Audio
                    </h3>
                    <p class="text-sm text-slate-300 leading-relaxed">
                        Nama <strong>BlackSpider</strong> telah dipercaya oleh para praktisi audio lapangan di tanah air. Dengan karakteristik magnet yang kuat, konus fleksibel namun kokoh, serta voice coil presisi, speaker BlackSpider terbukti mampu bekerja pada beban kerja tinggi tanpa penurunan kualitas suara.
                    </p>
                    <div class="pt-2">
                        <a href="{{ route('speakers.index') }}" class="inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white text-xs font-bold px-5 py-2.5 rounded-lg transition-colors">
                            <span>Lihat Katalog Lengkap BlackSpider</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </div>
                <div class="lg:col-span-4 flex justify-center">
                    <div class="w-36 h-36 rounded-2xl bg-slate-800 border-2 border-red-500/40 flex flex-col items-center justify-center p-4 text-center">
                        <span class="text-3xl font-black text-red-500">BS</span>
                        <span class="text-xs font-bold text-slate-200 mt-1">BLACKSPIDER</span>
                        <span class="text-[10px] text-slate-400">Audio System</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- 4 Pilar Layanan Kami --}}
        <div class="bg-white rounded-2xl p-8 border border-slate-200 shadow-sm">
            <h3 class="text-lg font-bold text-slate-900 mb-6 text-center">Fasilitas & Keunggulan Pabrikasi Kami</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 text-center">
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                    <div class="text-2xl mb-2">🏭</div>
                    <h4 class="font-bold text-sm text-slate-800">Workshop Modern</h4>
                    <p class="text-xs text-slate-500 mt-1">Dilengkapi mesin kalibrasi akustik untuk memastikan frekuensi audio akurat.</p>
                </div>
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                    <div class="text-2xl mb-2">🔍</div>
                    <h4 class="font-bold text-sm text-slate-800">Quality Control</h4>
                    <p class="text-xs text-slate-500 mt-1">Pengujian daya tahan pada beban maksimal sebelum produk dikemas.</p>
                </div>
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                    <div class="text-2xl mb-2">📦</div>
                    <h4 class="font-bold text-sm text-slate-800">Gudang & Stok Aman</h4>
                    <p class="text-xs text-slate-500 mt-1">Kapasitas penyimpanan memadai untuk melayani pesanan partai besar.</p>
                </div>
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                    <div class="text-2xl mb-2">🛠️</div>
                    <h4 class="font-bold text-sm text-slate-800">Service Center</h4>
                    <p class="text-xs text-slate-500 mt-1">Dukungan servis purna jual dan suku cadang asli bergaransi.</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
