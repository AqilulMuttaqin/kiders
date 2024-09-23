<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Aplikasi Membaca Buku untuk Anak-Anak

Aplikasi ini dibuat untuk membantu anak-anak belajar membaca melalui buku-buku interaktif yang menyenangkan. Dengan antarmuka yang ramah anak, aplikasi ini memudahkan orang tua dan guru untuk mengajarkan literasi kepada anak-anak dengan cara yang lebih menarik.

## Fitur Utama
- ...

## Cara Instalasi

Ikuti langkah-langkah berikut untuk menginstall aplikasi ini di mesin lokal kamu:

1. **Clone atau Download Repository**
    Clone project ke direktori lokal kamu:
    git clone https://github.com/AqilulMuttaqin/kiders.git

2. **Install Dependencies**
    Pindah ke direktori project, kemudian jalankan perintah berikut untuk menginstall dependencies:
    composer install
    npm install

3. **Setup Konfigurasi dan Database**
    Setup File Konfigurasi Copy file .env.example dan rename menjadi .env dan edit database pada file .env:
    cp .env.example .env

4. **Migrasi dan Seed Database**
    Jalankan migrasi database untuk membuat tabel-tabel yang dibutuhkan:
    php artisan migrate
    php artisan db:seed

5. **Jalankan Aplikasi**
    Jalankan aplikasi Laravel menggunakan 2 terminal dengan perintah masing-masing:
    - npm run dev
    - php artisan serve