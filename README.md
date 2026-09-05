# Slitwork

Slitwork adalah aplikasi web job board (papan lowongan kerja) berbasis Laravel + Vue.js. Employer bisa memposting lowongan, mengatur profil perusahaan, dan meninjau pelamar; pencari kerja bisa mencari lowongan lewat SPA pencarian berbasis Vue, melamar, dan menyimpan lowongan favorit. Aplikasi ini menggunakan sistem role & permission untuk membedakan hak akses **User (Job Seeker)**, **Author/Employer**, dan **Admin**.

## Fitur

- **Autentikasi & Profil** — Register, login, ubah password, dan nonaktifkan akun (via Laravel Fortify).
- **Pencarian Lowongan (SPA)** — Halaman pencarian job interaktif dibangun dengan Vue.js, lengkap dengan filter kategori & sidebar.
- **Manajemen Lowongan (Employer)** — Buat, edit, dan hapus post lowongan lengkap dengan deadline.
- **Manajemen Perusahaan (Employer)** — Buat & edit profil perusahaan, ajukan diri jadi employer.
- **Lamaran Kerja** — Job seeker melamar lowongan; employer meninjau daftar pelamar per lowongan.
- **Simpan Lowongan** — Job seeker bisa bookmark lowongan untuk dilihat kembali nanti.
- **Role & Permission** — Dikelola via [spatie/laravel-permission](https://spatie.be/docs/laravel-permission), dengan dashboard admin untuk mengelola user, role, dan kategori perusahaan.
- **Notifikasi UI** — Alert cantik memakai [SweetAlert](https://github.com/realrashid/sweet-alert).

## Screenshot

<p>

### Home Page
<a href="https://i.ibb.co/FJytDVn/Screenshot-61.png"><img src="https://i.ibb.co/FJytDVn/Screenshot-61.png" alt="Home Page" border="0" /></a>

### Vue.js SPA Job Finder
<a href="https://i.ibb.co/sJwZw8x/Screenshot-66.png"><img src="https://i.ibb.co/sJwZw8x/Screenshot-66.png" alt="Job Finder SPA" border="0" /></a>

### Post Description Panel
<a href="https://i.ibb.co/gMTxxj2/Screenshot-69.png"><img src="https://i.ibb.co/gMTxxj2/Screenshot-69.png" alt="Post Description" border="0" /></a>

### Author Dashboard
<a href="https://i.ibb.co/C6JKQ1h/Screenshot-78.png"><img src="https://i.ibb.co/C6JKQ1h/Screenshot-78.png" alt="Author Dashboard" border="0" /></a>

### Admin Dashboard
<a href="https://i.ibb.co/mD4961P/Screenshot-79.png"><img src="https://i.ibb.co/mD4961P/Screenshot-79.png" alt="Admin Dashboard" border="0" /></a>

</p>

## Tech Stack

| Layer | Teknologi |
|---|---|
| Framework | Laravel 12.61+ |
| Bahasa | PHP 8.2+ |
| Auth | Laravel Fortify |
| Role & Permission | Spatie Laravel Permission v6 |
| Notifikasi | RealRashid Sweet Alert |
| Database | MySQL |
| Frontend | Blade + Bootstrap + Vue.js 2 (SPA pencarian job) |

## Requirement

- PHP 8.2 atau lebih baru
- Composer
- MySQL (atau database lain yang didukung Laravel)
- Node.js & NPM

## Instalasi

```bash
# 1. Clone repository
git clone https://github.com/<username>/<repo>.git
cd <repo>

# 2. Install dependency PHP
composer install

# 3. Siapkan file environment
cp .env.example .env
php artisan key:generate

# 4. Atur koneksi database di .env
#    DB_DATABASE=nama_database_kamu
#    DB_USERNAME=root
#    DB_PASSWORD=

# 5. Jalankan migration
php artisan migrate

# 6. Install & build asset frontend (Vue, Bootstrap, dll)
npm install
npm run dev      # untuk development
# atau
npm run prod     # untuk production build

# 7. Jalankan server development
php artisan serve
```

Aplikasi bisa diakses di `http://127.0.0.1:8000`.

> **Kalau ada error saat instalasi:** coba `composer update` sebagai ganti `composer install`, dan pastikan `php artisan key:generate` sudah dijalankan setelah file `.env` ada.

## Struktur Role

| Role | Akses |
|---|---|
| `user` | Melamar & menyimpan lowongan |
| `author` | Kelola profil perusahaan & posting lowongan (employer) |
| Admin (via dashboard) | Kelola seluruh user, role, permission, dan kategori perusahaan |

Role dan permission awal biasanya di-seed melalui `database/seeders` — sesuaikan seeder sebelum migrate kalau kamu butuh akun admin default.

## Catatan Upgrade

Project ini pernah di-upgrade dari Laravel 8 (PHP 7.3) ke **Laravel 12.61+** supaya kompatibel dengan PHP 8.2 dan bebas dari advisory keamanan pada versi Laravel yang lebih lama (path confusion pada signed URL & CRLF injection pada validasi email, keduanya sudah dipatch mulai Laravel 12.60/12.61). Detail lengkap perubahan dependency ada di `UPGRADE_NOTES.md`.

## Kontribusi

Pull request dipersilakan. Untuk perubahan besar, buka issue dulu untuk didiskusikan.

## Lisensi

[MIT](https://opensource.org/licenses/MIT)
