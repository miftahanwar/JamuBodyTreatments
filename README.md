# Jamu Body Treatments

Sistem Informasi Booking Layanan Spa dan Massage

Proyek ini dibuat dengan tujuan membantu Anda yang sedang belajar menggunakan CodeIgniter 3 dengan studi kasus pembuatan sistem booking layanan spa dan massage. Setelah mempelajari dan memahami proyek ini, Anda dapat mengembangkan sistem serupa atau membuat versi lain yang lebih kompleks sesuai kebutuhan. Semoga proyek ini bermanfaat.

## ✨ Fitur
1. Booking layanan spa secara online
2. Laporan omzet harian, bulanan, dan tahunan
3. Grafik/statistik omzet bulanan sepanjang tahun berjalan
4. Total data yang ditampilkan dalam modul album, foto, event, layanan, kategori, kontak, slider, dan customer
5. Manajemen transaksi (dengan invoice otomatis berdasarkan tahun-bulan-tanggal yang akan reset tiap bulan)
6. Manajemen layanan spa (tambah/edit/hapus)
7. Manajemen galeri foto dan album
8. Manajemen event atau promosi
9. Manajemen kategori layanan
10. Manajemen slider homepage
11. Manajemen informasi kontak
12. Manajemen akun pengguna (admin, superadmin, customer)
13. Profil bisnis spa
14. Pengaturan diskon khusus untuk member

## 🧰 Tools yang Digunakan
- PHP 7 (7.4.3)
- IonAuth 2 (untuk sistem autentikasi)
- CodeIgniter 3 (3.1.8)
- MySQL
- Bootstrap 3
- AdminLTE 2

## 🚀 Cara Menggunakan
Pastikan Anda telah menginstall XAMPP, LAMPP, atau local development stack lainnya. Jika belum, silakan lihat panduan instalasi di bagian bawah README ini.

Langkah-langkah:
1. Download atau clone project ini ke komputer Anda
2. Letakkan di dalam folder `htdocs` (jika menggunakan XAMPP)
3. Buat database baru di phpMyAdmin dengan nama `jamubodytreatments`
4. Import file database yang tersedia di dalam folder `db`
5. Buka terminal pada direktori project dan jalankan `composer update`
6. Akses melalui browser di `http://localhost/JamuBodyTreatments`

## 🔐 Cara Login
### Backend (Panel Admin):
- Akses: `http://localhost/JamuBodyTreatments/admin/auth/login`
- SuperAdmin:
  - Email: `superadmin@gmail.com`
  - Password: `superadmin`
- Admin:
  - Email: `administrator@gmail.com`
  - Password: `administrator`

### Frontend (Customer):
- Akses: `http://localhost/JamuBodyTreatments/auth/login`
- Customer Biasa:
  - Email: `batistuta@gmail.com`
  - Password: `asdfghjkl`
- Member Premium:
  - Email: `userpremium@gmail.com`
  - Password: `asdfghjkl`

## 📝 Catatan
- Dibuat oleh **miftahanwar** dengan mengadaptasi sistem dari proyek open source.
- Proses upgrade membership dilakukan secara manual: customer menghubungi superadmin untuk mengubah tipe akun melalui backend.

## 🖥️ Cara Install Local Development Server
Untuk menginstall XAMPP atau LAMPP di perangkat Anda, silakan ikuti panduan berikut:

1. [Cara Install Apache, MySQL, dan PHP di Linux (LAMPP)](https://amperakoding.com/article/cara-install-apache-mysql-dan-php-di-os-linux-lampp)
2. [Cara Install XAMPP di OS Linux](https://www.muhazmi.com/2016/12/cara-install-xampp-yang-baik-dan-benar.html)
3. [Cara Install XAMPP di OS Windows](https://www.muhazmi.com/2017/08/cara-install-xampp-yang-baik-dan-benar.html)
