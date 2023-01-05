# Chat Api

Aplikasi ini dibuat dengan Laravel dan Livewire. Mohon untuk dibaca dengan teliti agar aplikasi dapat berjalan dengan baik di server lokal. Selamat membaca.

## Pre-request Instalasi

Sebelum memulai pastikan memiliki beberapa tools berikut:
- PHP versi "^7.3" atau "^8.0"
- Server lokal dengan database MySQL dan Apache (contoh: XAMPP/Laragon)
- Composer: https://getcomposer.org/ (PHP package manager)

## Cara Instalasi

Clone repositori
```bash
git clone https://github.com/akhyaruu/chat-api.git
```

Masukan folder kedalam server lokal dan pindah kedalam repositori folder
```bash
cd chat-api
```

Install semua dependency menggunakan composer
```bash
composer install
```

Buat file ".env" didalam root folder laravel. Lalu salin contoh file ".env.example" dan buat perubahan konfigurasi yang diperlukan di file ".env" tersebut.
```bash
cp .env.example .env
```

Perubahan konfigurasi yang perlu diubah (menyesuaikan kebutuhan server lokal) diantaranya adalah:

- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=chatapi
- DB_USERNAME=root
- DB_PASSWORD=

Setelah melakukan perubahan sesuai kebutuhan maka selanjutnya adalah generate application key yang baru
```bash
php artisan key:generate
```

Jalankan migrasi database dan seeder (atur koneksi database di file ".env " sebelum dimigrasi)
```bash
php artisan migrate --seed
```

Jalankan server lokal
```bash
php artisan serve
```

Anda sekarang dapat mengakses server di http://127.0.0.1:8000/

## Catatan
Setelah dilakukan migrasi terdapat data palsu (user) yang dapat digunakan untuk keperluan testing seperti saat login atau melakukan chat

## Error atau butuh bantuan

Hubungi saya melalui email: ilhamakhyar.f@gmail.com
