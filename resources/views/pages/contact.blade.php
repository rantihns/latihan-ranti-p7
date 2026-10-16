@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<div class="space-y-6">

    {{-- Judul Halaman --}}
    <div class="bg-white rounded-lg border border-gray-200 p-6 shadow-sm">
        <h1 class="text-2xl font-bold text-gray-900">
            Hubungi PT Maja Agung Elektrindo
        </h1>
        <p class="text-sm text-gray-600 mt-1">
            Silakan hubungi kami jika Anda memiliki pertanyaan seputar produk speaker BlackSpider atau ingin melakukan pemesanan.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        
        {{-- Info Kontak --}}
        <div class="bg-white rounded-lg border border-gray-200 p-6 shadow-sm space-y-4">
            <h2 class="text-base font-bold text-gray-900 border-b pb-2">
                Informasi Kontak & Alamat
            </h2>

            <div class="space-y-3 text-sm text-gray-700">
                <div>
                    <span class="font-semibold block text-gray-900">🏢 Nama Perusahaan:</span>
                    <span>PT Maja Agung Elektrindo</span>
                </div>

                <div>
                    <span class="font-semibold block text-gray-900">📍 Alamat Kantor:</span>
                    <span>Kawasan Industri & Pergudangan Terpadu Blok B No. 12-15, Jawa Timur, Indonesia</span>
                </div>

                <div>
                    <span class="font-semibold block text-gray-900">📞 Nomor Telepon:</span>
                    <span>(031) 8989-1234 / 0812-3456-7890</span>
                </div>

                <div>
                    <span class="font-semibold block text-gray-900">✉️ Email:</span>
                    <span>info@majaagung.co.id</span>
                </div>

                <div>
                    <span class="font-semibold block text-gray-900">⏰ Jam Operasional:</span>
                    <span>Senin - Jumat: 08.00 - 17.00 WIB (Sabtu: 08.00 - 14.00 WIB)</span>
                </div>
            </div>
        </div>

        {{-- Form Pesan Sederhana --}}
        <div class="bg-white rounded-lg border border-gray-200 p-6 shadow-sm">
            <h2 class="text-base font-bold text-gray-900 border-b pb-2 mb-4">
                Kirim Pesan
            </h2>

            <form onsubmit="event.preventDefault(); alert('Pesan berhasil dikirim! Terima kasih.');" class="space-y-3 text-sm">
                <div>
                    <label class="block font-medium text-gray-700 mb-1">Nama Lengkap</label>
                    <input type="text" required placeholder="Masukkan nama Anda" class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:border-red-500">
                </div>

                <div>
                    <label class="block font-medium text-gray-700 mb-1">Alamat Email</label>
                    <input type="email" required placeholder="Masukkan email Anda" class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:border-red-500">
                </div>

                <div>
                    <label class="block font-medium text-gray-700 mb-1">Pesan / Pertanyaan</label>
                    <textarea rows="4" required placeholder="Tuliskan pesan Anda di sini..." class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:border-red-500"></textarea>
                </div>

                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-medium px-4 py-2 rounded text-sm transition">
                    Kirim Pesan
                </button>
            </form>
        </div>

    </div>

</div>
@endsection
