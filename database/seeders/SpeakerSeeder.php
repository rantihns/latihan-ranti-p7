<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpeakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $speakers = [
            [
                'name' => 'BlackSpider Box BS-450 Pro',
                'category' => 'Box Speaker',
                'power_rating' => '450 Watt RMS / 900 Watt Peak',
                'impedance' => '8 Ohm',
                'frequency_response' => '40 Hz - 18 kHz',
                'price' => 1850000,
                'description' => 'Box speaker pasif profesional dua arah dengan konstruksi bodi kayu kokoh dan finishing polyurea tahan cuaca. Cocok untuk acara indoor maupun outdoor skala menengah.',
                'image' => 'images/products/box450.jpg',
            ],
            [
                'name' => 'BlackSpider BT-2210 Portable',
                'category' => 'Portable Audio',
                'power_rating' => '120 Watt Peak',
                'impedance' => '4 Ohm',
                'frequency_response' => '50 Hz - 20 kHz',
                'price' => 750000,
                'description' => 'Speaker portable serbaguna dengan konektivitas Bluetooth 5.0, baterai tahan hingga 8 jam pemakaian, input gitar, dan dual microphone nirkabel untuk karaoke mobile.',
                'image' => 'images/products/bt2210.jpg',
            ],
            [
                'name' => 'BlackSpider CS-350 Karaoke',
                'category' => 'Karaoke Speaker',
                'power_rating' => '350 Watt RMS',
                'impedance' => '8 Ohm',
                'frequency_response' => '45 Hz - 20 kHz',
                'price' => 1250000,
                'description' => 'Dirancang khusus untuk sistem audio ruang karaoke keluarga dan komersial dengan vokal yang jernih, treble halus, serta bass bulat yang nyaman di telinga.',
                'image' => 'images/products/cs350.jpg',
            ],
            [
                'name' => 'BlackSpider GT-15 Active Subwoofer',
                'category' => 'Subwoofer Aktif',
                'power_rating' => '800 Watt Continuous / 1600 Watt Max',
                'impedance' => '8 Ohm',
                'frequency_response' => '32 Hz - 250 Hz',
                'price' => 3450000,
                'description' => 'Subwoofer aktif 15 inch dengan modul amplifier Class-D bertenaga besar dan DSP onboard. Memberikan dentuman frekuensi rendah yang bertenaga dan solid untuk sound system panggung.',
                'image' => 'images/products/gt15.jpg',
            ],
            [
                'name' => 'BlackSpider JBO-15 Stage Monitor',
                'category' => 'Stage Monitor',
                'power_rating' => '500 Watt RMS',
                'impedance' => '8 Ohm',
                'frequency_response' => '45 Hz - 19 kHz',
                'price' => 2650000,
                'description' => 'Floor monitor panggung 15 inch dengan sudut dispersi optimal untuk musisi dan panggung pertunjukan live. Memiliki sensitivitas tinggi dan artikulasi vokal transparan.',
                'image' => 'images/products/jbo15.jpg',
            ],
            [
                'name' => 'BlackSpider KA-130 Audio System',
                'category' => 'Power Audio Set',
                'power_rating' => '600 Watt Total System',
                'impedance' => '4 - 8 Ohm',
                'frequency_response' => '38 Hz - 22 kHz',
                'price' => 2950000,
                'description' => 'Paket set audio lengkap terintegrasi amplifier & mixer dengan equalizer grafik 7-band. Solusi praktis untuk aula pertemuan, rumah ibadah, dan sekolah.',
                'image' => 'images/products/ka130.jpg',
            ],
            [
                'name' => 'BlackSpider Woofer Pro 10 Inch',
                'category' => 'Komponen Speaker',
                'power_rating' => '300 Watt RMS',
                'impedance' => '8 Ohm',
                'frequency_response' => '50 Hz - 4.5 kHz',
                'price' => 620000,
                'description' => 'Komponen driver woofer 10 inch dengan voice coil tahan panas dan konus kertas berlapis khusus. Menghasilkan respon frekuensi midrange dan bass yang presisi.',
                'image' => 'images/products/speaker10in.jpg',
            ],
            [
                'name' => 'BlackSpider Subwoofer Heavy 15 Inch',
                'category' => 'Komponen Speaker',
                'power_rating' => '1000 Watt Max',
                'impedance' => '8 Ohm',
                'frequency_response' => '30 Hz - 3 kHz',
                'price' => 1450000,
                'description' => 'Driver komponen subwoofer 15 inch dengan magnet ferrite ganda berukuran besar dan sasis die-cast aluminium kokoh untuk daya tahan pemakaian jangka panjang tanpa distorsi.',
                'image' => 'images/products/speaker15in.jpg',
            ],
            [
                'name' => 'BlackSpider Mid-Bass 6.5 Inch',
                'category' => 'Komponen Speaker',
                'power_rating' => '150 Watt RMS',
                'impedance' => '4 Ohm',
                'frequency_response' => '65 Hz - 8 kHz',
                'price' => 380000,
                'description' => 'Komponen speaker mid-bass 6.5 inch ideal untuk aplikasi car audio maupun sistem speaker compact 2-way rumahan dengan efisiensi tinggi.',
                'image' => 'images/products/speaker6in.jpg',
            ],
            [
                'name' => 'BlackSpider Line Array 8 Inch',
                'category' => 'Komponen Speaker',
                'power_rating' => '250 Watt RMS',
                'impedance' => '8 Ohm',
                'frequency_response' => '60 Hz - 6 kHz',
                'price' => 540000,
                'description' => 'Komponen khusus modul line array dengan magnet neodymium ringan berdaya magnet tinggi, dirancang untuk proyeksi suara jarak jauh yang jernih dan konsisten.',
                'image' => 'images/products/speaker8in.jpg',
            ],
        ];

        foreach ($speakers as $speaker) {
            \App\Models\Speaker::create($speaker);
        }
    }
}
