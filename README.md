# Website Company Profile: PT Maja Agung Elektrindo (Brand: BlackSpider)

> **Tugas Praktikum Rekayasa Web — Pertemuan 7**  
> Studi Kasus: Tempat Kerja Masing-Masing (PT Maja Agung Elektrindo — Merk Speaker: BlackSpider)

---

## 📌 Ringkasan Studi Kasus

- **Nama Perusahaan:** PT Maja Agung Elektrindo
- **Bidang Usaha:** Manufaktur, perakitan, dan distribusi peralatan audio & sound system profesional.
- **Brand / Merk Produk:** **BlackSpider** (Box speaker, subwoofer aktif, monitor panggung, komponen woofer & audio portable).
- **Tech Stack:**
  - **Framework:** Laravel 12 (PHP 8.5)
  - **Database:** SQLite (`database/database.sqlite`)
  - **Frontend UI:** Tailwind CSS v4 via NPM / Vite (Offline-ready, **Tanpa CDN**)
  - **Template Engine:** Blade Templating

---

## 🎯 Pemenuhan 7 Ketentuan Tugas

| No | Ketentuan Tugas | Implementasi dalam Proyek | File Terkait |
|:---|:---|:---|:---|
| **1** | **Website wajib memiliki 4 Menu** | 1. **Beranda** (`/`)<br>2. **Tentang Kami** (`/tentang-kami`)<br>3. **Produk BlackSpider** (`/produk`) &rarr; *Output Utama Dinamis*<br>4. **Kontak** (`/kontak`) | `routes/web.php`<br>`resources/views/layouts/app.blade.php`<br>`resources/views/pages/*` |
| **2** | **Nama model, controller, dan tabel migration sesuai dengan nama object** | Objek: Speaker BlackSpider<br>• Model: `Speaker`<br>• Controller: `SpeakerController`<br>• Tabel Migration: `speakers` | `app/Models/Speaker.php`<br>`app/Http/Controllers/SpeakerController.php`<br>`database/migrations/*_create_speakers_table.php` |
| **3** | **Migration schema minimal 6 field selain `id` dan `timestamps`** | Dibuat **8 field khusus**:<br>1. `name` (string)<br>2. `category` (string)<br>3. `power_rating` (string)<br>4. `impedance` (string)<br>5. `frequency_response` (string)<br>6. `price` (decimal)<br>7. `description` (text)<br>8. `image` (string) | `database/migrations/*_create_speakers_table.php` |
| **4** | **Buat seeder untuk menambahkan minimal 10 data** | `SpeakerSeeder` berisi **10 produk realistis** BlackSpider dengan spesifikasi audio lengkap. | `database/seeders/SpeakerSeeder.php`<br>`database/seeders/DatabaseSeeder.php` |
| **5** | **Setiap data wajib memiliki gambar masing-masing** | 10 gambar lokal dari `@assets` dipetakan ke 10 produk di `public/images/products/`: <br>• `box450.jpg`<br>• `bt2210.jpg`<br>• `cs350.jpg`<br>• `gt15.jpg`<br>• `jbo15.jpg`<br>• `ka130.jpg`<br>• `speaker10in.jpg`<br>• `speaker15in.jpg`<br>• `speaker6in.jpg`<br>• `speaker8in.jpg` | `public/images/products/*` |
| **6** | **Tampilkan seluruh data pada view Blade dengan desain yang rapi** | • Halaman katalog card grid responsif, filter kategori & search.<br>• Halaman detail spesifikasi per produk.<br>• Master layout terpadu (`layouts/app.blade.php`). | `resources/views/speakers/index.blade.php`<br>`resources/views/speakers/show.blade.php` |
| **7** | **Gunakan Bootstrap/Tailwind, TANPA CDN, assets di folder public via NPM** | Tailwind CSS diinstal via NPM dan dikompilasi ke `public/build/` menggunakan Vite. Asset offline disertakan sehingga tidak memerlukan koneksi internet/CDN luar. | `package.json`<br>`vite.config.js`<br>`public/build/assets/*` |

---

## 🚀 Panduan Menjalankan Proyek (Local Development)

### 1. Clone Repository
```bash
git clone https://github.com/rantihns/latihan-ranti-p7.git
cd latihan-ranti-p7
```

### 2. Install Dependensi PHP & Node (Opsional jika sudah ada)
```bash
composer install
npm install
npm run build
```

### 3. Setup File Konfigurasi (.env)
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Menjalankan Database & Seeder
Database SQLite bawaan sudah terisi data. Jika ingin mereset dan mengulang seeder:
```bash
php artisan migrate:fresh --seed
```

### 5. Menjalankan Server Laravel
```bash
php artisan serve
```
Buka browser di: [http://127.0.0.1:8000](http://127.0.0.1:8000)

- **Beranda:** `http://127.0.0.1:8000/`
- **Tentang Kami:** `http://127.0.0.1:8000/tentang-kami`
- **Produk (Output Tugas):** `http://127.0.0.1:8000/produk`
- **Kontak:** `http://127.0.0.1:8000/kontak`

---

## 📂 Struktur Direktori Utama

```
├── app/
│   ├── Http/Controllers/
│   │   └── SpeakerController.php       # Controller sesuai nama object
│   └── Models/
│       └── Speaker.php                 # Model Eloquent Speaker
├── database/
│   ├── migrations/
│   │   └── *_create_speakers_table.php # Schema tabel (8 kolom spesifik)
│   └── seeders/
│       └── SpeakerSeeder.php           # Seeder 10 produk lengkap
├── public/
│   ├── build/                          # Asset terkompilasi Tailwind CSS (No CDN)
│   └── images/products/                # 10 Foto produk dari folder assets
├── resources/
│   ├── css/app.css                     # Tailwind CSS entrypoint
│   └── views/
│       ├── layouts/app.blade.php       # Master layout (4 Menu & Footer)
│       ├── pages/
│       │   ├── home.blade.php          # Menu 1: Beranda
│       │   ├── about.blade.php         # Menu 2: Tentang Kami
│       │   └── contact.blade.php       # Menu 4: Kontak
│       └── speakers/
│           ├── index.blade.php         # Menu 3: Katalog Produk (Output Tugas)
│           └── show.blade.php          # Detail Spesifikasi Produk
└── routes/
    └── web.php                         # Routing 4 menu & detail
```
