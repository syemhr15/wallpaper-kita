# Wallpaper Kita

Wallpaper Kita adalah aplikasi web berbasis Laravel yang dirancang untuk membantu pengguna mengelola koleksi wallpaper favorit mereka. Aplikasi ini memungkinkan pengguna untuk menyimpan referensi gambar (seperti dari Unsplash), melihat koleksi pribadi, dan menghapusnya saat tidak lagi diperlukan.

## Tujuan & Pengguna

**Tujuan Aplikasi:**
Aplikasi ini bertujuan untuk memudahkan pengguna dalam mengumpulkan dan mengelola inspirasi visual atau wallpaper berkualitas tinggi dari satu tempat yang terintegrasi, tanpa perlu membebani penyimpanan lokal perangkat secara berlebihan.

**Target Pengguna:**
Aplikasi ini ditujukan bagi siapa saja yang menyukai fotografi, desain, atau sekadar ingin mempercantik tampilan layar perangkat mereka dengan gambar-gambar estetik dan ingin menyimpannya dalam koleksi pribadi yang terorganisir.

## Fitur Utama dan screen shoot aplikasi

Aplikasi ini memiliki fungsionalitas utama yang diatur dalam `WallpaperController`:

- **Simpan Wallpaper (`store`)**:
  Menyimpan data wallpaper baru ke dalam database yang terhubung dengan akun pengguna yang sedang login.
<img width="1366" height="768" alt="Screenshot (622)" src="https://github.com/user-attachments/assets/4e00c43a-1b14-4803-8266-f99a87d29b35" />


- **Koleksi Saya (`index`)**:
  Menampilkan daftar seluruh wallpaper yang telah disimpan oleh pengguna.
<img width="1366" height="768" alt="Screenshot (612)" src="https://github.com/user-attachments/assets/1fc58391-d60d-4906-a636-6731160ccc3b" />

- **Pencarian Wallpaper**:
  Menyediakan fitur *search bar* yang memudahkan pengguna untuk mencari dan menemukan wallpaper dengan cepat.
<img width="1366" height="768" alt="Screenshot (611)" src="https://github.com/user-attachments/assets/70468d19-f716-4243-b7c2-49f2bfe615b0" />

- **Hapus Wallpaper**:
  Menghapus wallpaper dari koleksi
<img width="1366" height="768" alt="Screenshot (613)" src="https://github.com/user-attachments/assets/9eff7024-e2c8-44cb-a888-661ec95d046a" />

- **Halaman login**:
  <img width="1366" height="768" alt="Screenshot (615)" src="https://github.com/user-attachments/assets/acb372ea-d2c5-4e79-b1ae-933a4daf07ae" />

- **Halaman register**:
  <img width="1366" height="768" alt="Screenshot (617)" src="https://github.com/user-attachments/assets/c8593f0a-3aec-463c-abe9-723dbdbea884" />

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


**akhir kata.... tengs**

## Identitas Pengembang

- **Nama**: Hisyam Abdillah Sumpena
- **Prodi**: Sistem Informasi
- **Instansi**: Institut Teknologi Garut

