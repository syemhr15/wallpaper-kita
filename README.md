# Wallpaper Kita

Wallpaper Kita adalah aplikasi web berbasis Laravel yang dirancang untuk membantu pengguna mengelola koleksi wallpaper favorit mereka. Aplikasi ini memungkinkan pengguna untuk menyimpan referensi gambar (seperti dari Unsplash), melihat koleksi pribadi, dan menghapusnya saat tidak lagi diperlukan.

## Tujuan & Pengguna

**Tujuan Aplikasi:**
Aplikasi ini bertujuan untuk memudahkan pengguna dalam mengumpulkan dan mengelola inspirasi visual atau wallpaper berkualitas tinggi dari satu tempat yang terintegrasi, tanpa perlu membebani penyimpanan lokal perangkat secara berlebihan.

**Target Pengguna:**
Aplikasi ini ditujukan bagi siapa saja yang menyukai fotografi, desain, atau sekadar ingin mempercantik tampilan layar perangkat mereka dengan gambar-gambar estetik dan ingin menyimpannya dalam koleksi pribadi yang terorganisir.

## Fitur Utama

Aplikasi ini memiliki fungsionalitas utama yang diatur dalam `WallpaperController`:

- **Simpan Wallpaper (`store`)**:
  Menyimpan data wallpaper baru ke dalam database yang terhubung dengan akun pengguna yang sedang login. Data yang disimpan meliputi:
  - ID Pengguna (`user_id`)
  - Nama Fotografer (`photographer`)
  - URL Gambar (`image_url`)
  - Tautan Unsplash (`unsplash_link`)

- **Koleksi Saya (`index`)**:
  Menampilkan daftar seluruh wallpaper yang telah disimpan oleh pengguna. Menggunakan view `koleksi`.

- **Pencarian Wallpaper**:
  Menyediakan fitur *search bar* yang memudahkan pengguna untuk mencari dan menemukan wallpaper spesifik di dalam koleksi mereka dengan cepat.

- **Hapus Wallpaper (`destroy`)**:
  Menghapus wallpaper dari koleksi secara aman. Sistem memverifikasi bahwa wallpaper yang akan dihapus benar-benar milik pengguna yang sedang login sebelum melakukan penghapusan.

## Sumber Data (Public API)

Proyek ini memanfaatkan **Unsplash API** (Free Public API) sebagai sumber data utama. API ini menyediakan akses ke jutaan foto berkualitas tinggi yang bebas hak cipta, memungkinkan pengguna untuk mencari dan menyimpan referensi gambar yang menakjubkan secara *real-time*.


## Persyaratan Sistem

- PHP >= 8.0
- Composer
- Database (MySQL, MariaDB, atau lainnya yang didukung Laravel)

## Cara Instalasi

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di komputer lokal Anda:

1. **Clone Repositori**
   ```bash
   git clone https://github.com/username/wallpaper-kita.git
   cd wallpaper-kita
   ```

2. **Instal Dependensi**
   ```bash
   composer install
   ```

3. **Konfigurasi Environment**
   Salin file contoh `.env` dan buat kunci aplikasi baru:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   *Jangan lupa untuk mengatur konfigurasi database (DB_DATABASE, DB_USERNAME, dll) di dalam file `.env`.*

4. **Jalankan Migrasi Database**
   ```bash
   php artisan migrate
   ```

5. **Jalankan Server**
   ```bash
   php artisan serve
   ```
   Akses aplikasi melalui browser di `http://localhost:8000`.

## Identitas Pengembang

- **Nama**: Hisyam Abdillah Sumpena
- **Prodi**: Sistem Informasi
- **Instansi**: Institut Teknologi Garut

## Kontribusi

Kontribusi selalu diterima. Silakan buat *Pull Request* atau laporkan masalah melalui *Issues*.

## Lisensi

Proyek ini bersifat open-source dan dilisensikan di bawah MIT license.