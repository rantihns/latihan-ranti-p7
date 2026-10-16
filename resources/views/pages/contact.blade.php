@extends('layouts.app')

@section('title', 'Kontak Kami - PT Maja Agung Elektrindo')

@section('content')
<div class="bg-slate-50 py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">

        {{-- Header Kontak --}}
        <div class="bg-white rounded-2xl p-8 sm:p-10 border border-slate-200 shadow-sm">
            <span class="text-xs font-bold uppercase tracking-wider text-red-600">Hubungi Kami</span>
            <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight mt-1">
                Layanan Pelanggan & Konsultasi Audio
            </h1>
            <p class="mt-2 text-sm text-slate-600 max-w-2xl">
                Apakah Anda memiliki pertanyaan mengenai spesifikasi produk speaker BlackSpider atau ingin melakukan pemesanan dalam jumlah besar? Tim PT Maja Agung Elektrindo siap membantu Anda.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            
            {{-- Info Kontak & Alamat --}}
            <div class="lg:col-span-5 space-y-6">
                <div class="bg-white rounded-2xl p-6 sm:p-8 border border-slate-200 shadow-sm space-y-6">
                    <h2 class="text-lg font-bold text-slate-900 border-b border-slate-100 pb-3">
                        Informasi Kantor & Gudang
                    </h2>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-red-50 text-red-600 flex items-center justify-center shrink-0 text-lg font-bold">
                            📍
                        </div>
                        <div>
                            <h3 class="text-xs font-bold uppercase tracking-wide text-slate-400">Alamat Perusahaan</h3>
                            <p class="text-sm font-semibold text-slate-800 mt-0.5">PT Maja Agung Elektrindo</p>
                            <p class="text-xs text-slate-600 leading-relaxed mt-1">
                                Kawasan Industri & Pergudangan Terpadu Blok B No. 12-15, Jawa Timur, Indonesia
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-red-50 text-red-600 flex items-center justify-center shrink-0 text-lg font-bold">
                            📞
                        </div>
                        <div>
                            <h3 class="text-xs font-bold uppercase tracking-wide text-slate-400">Telepon / WhatsApp</h3>
                            <p class="text-sm font-semibold text-slate-800 mt-0.5">(031) 8989-1234</p>
                            <p class="text-xs text-slate-500">WhatsApp Sales: 0812-3456-7890</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-red-50 text-red-600 flex items-center justify-center shrink-0 text-lg font-bold">
                            ✉️
                        </div>
                        <div>
                            <h3 class="text-xs font-bold uppercase tracking-wide text-slate-400">Email Resmi</h3>
                            <p class="text-sm font-semibold text-slate-800 mt-0.5">sales@majaagung.co.id</p>
                            <p class="text-xs text-slate-500">info@blackspider-audio.id</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-red-50 text-red-600 flex items-center justify-center shrink-0 text-lg font-bold">
                            ⏰
                        </div>
                        <div>
                            <h3 class="text-xs font-bold uppercase tracking-wide text-slate-400">Jam Operasional</h3>
                            <p class="text-sm font-semibold text-slate-800 mt-0.5">Senin - Jumat: 08.00 - 17.00 WIB</p>
                            <p class="text-xs text-slate-500">Sabtu: 08.00 - 14.00 WIB (Minggu Libur)</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Formulir Kirim Pesan --}}
            <div class="lg:col-span-7">
                <div class="bg-white rounded-2xl p-6 sm:p-8 border border-slate-200 shadow-sm">
                    <h2 class="text-lg font-bold text-slate-900 mb-4">Kirim Pesan / Permintaan Brosur</h2>
                    
                    <form onsubmit="event.preventDefault(); alert('Terima kasih! Pesan Anda telah terkirim kepada PT Maja Agung Elektrindo.');" class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="nama" class="block text-xs font-semibold text-slate-700 mb-1">Nama Lengkap</label>
                                <input type="text" id="nama" required placeholder="Nama Anda" class="w-full bg-slate-50 border border-slate-300 rounded-lg px-3.5 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-red-500 focus:bg-white transition-all">
                            </div>
                            <div>
                                <label for="email" class="block text-xs font-semibold text-slate-700 mb-1">Alamat Email</label>
                                <input type="email" id="email" required placeholder="nama@email.com" class="w-full bg-slate-50 border border-slate-300 rounded-lg px-3.5 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-red-500 focus:bg-white transition-all">
                            </div>
                        </div>

                        <div>
                            <label for="subjek" class="block text-xs font-semibold text-slate-700 mb-1">Subjek / Keperluan</label>
                            <select id="subjek" class="w-full bg-slate-50 border border-slate-300 rounded-lg px-3.5 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-red-500 focus:bg-white transition-all">
                                <option>Informasi Harga & Pemesanan Grosir</option>
                                <option>Konsultasi Sound System Proyek</option>
                                <option>Layanan Garansi & Servis Speaker</option>
                                <option>Permohonan Kerjasama Dealer / Reseller</option>
                            </select>
                        </div>

                        <div>
                            <label for="pesan" class="block text-xs font-semibold text-slate-700 mb-1">Pesan atau Rincian Kebutuhan</label>
                            <textarea id="pesan" rows="4" required placeholder="Tuliskan pertanyaan atau tipe speaker BlackSpider yang Anda minati..." class="w-full bg-slate-50 border border-slate-300 rounded-lg px-3.5 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-red-500 focus:bg-white transition-all"></textarea>
                        </div>

                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2.5 px-6 rounded-lg text-sm transition-colors shadow-sm">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
