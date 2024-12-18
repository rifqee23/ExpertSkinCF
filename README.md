<p align="center">
  <a href="#">
    <img src="public/assets/img/logo.png" alt="Logo ExpertSkinCF" height="128">
    <h1 align="center">Wolf Field - Sistem Reservasi Lapangan Futsal</h1>
  </a>
</p>

Wolf Field adalah aplikasi berbasis web yang memudahkan pengguna dalam melakukan reservasi lapangan futsal. Aplikasi ini dilengkapi dengan berbagai fitur untuk manajemen lapangan, pemesanan, pembayaran, serta riwayat reservasi yang dapat diakses oleh admin dan pengguna.

---

## Fitur

## Fitur Pengguna
- **Beranda**: Pengguna dapat mengakses halaman utama aplikasi yang berisi informasi mengenai sistem pakar dan cara penggunaannya.
- **Diagnosis**: Pengguna dapat melakukan diagnosis kondisi kulit berdasarkan gejala yang dialami dengan memilih jawaban sesuai dengan gejala yang muncul.
- **Melihat Akurasi**: Setelah diagnosis selesai, pengguna dapat melihat tingkat akurasi dari hasil diagnosis yang diberikan oleh sistem.
- **Tes Ulang**: Pengguna dapat mengulang tes diagnosis jika diperlukan untuk mendapatkan hasil yang lebih akurat.
- **Melihat Riwayat**: Pengguna dapat melihat riwayat diagnosis yang telah dilakukan sebelumnya.
- **Login dan Logout**: Pengguna dapat login untuk mengakses aplikasi dan logout setelah selesai menggunakan aplikasi.

## Prasyarat

Sebelum memulai, pastikan Anda telah memenuhi persyaratan berikut:
- PHP >= 8.0
- Composer
- Laravel 10
- MySQL atau database lain yang didukung Laravel
- Node.js (untuk pengelolaan assets dan frontend)

---

## Instalasi

### 1. Clone Repository
Clone repository Wolf Field ke dalam direktori lokal Anda:
```bash
git clone https://github.com/username/ExpertSkinCF.git
```


### 2. Instal Dependensi
Masuk ke direktori proyek dan install dependensi menggunakan Composer:
```bash
cd ExpertSkinCF
composer install
```

Install dependensi frontend menggunakan npm:
```bash
npm install
```

### 3. Konfigurasi .env
Salin file `.env.example` menjadi `.env`:
```bash
cp .env.example .env
```

Buka file `.env` dan sesuaikan konfigurasi database Anda:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate Kunci Aplikasi
Jalankan perintah berikut untuk menghasilkan kunci aplikasi:
```bash
php artisan key:generate
```

### 5. Migrasi dan Seeding Database
Jalankan migrasi untuk membuat tabel-tabel yang diperlukan di database:
```bash
php artisan migrate
```

Jika Anda ingin mengisi database dengan data dummy, jalankan:
```bash
php artisan db:seed
```

### 6. Menjalankan Aplikasi
Jalankan server lokal menggunakan Npm:
```bash
npm run dev
```
Akses aplikasi di browser pada `http://localhost:8000`.

---

## Penggunaan

### 1. Registrasi dan Login
Pengguna dapat melakukan registrasi dan login menggunakan email dan password untuk mengakses aplikasi. Setelah login, pengguna dapat mulai menggunakan fitur diagnosis.

### 2. Diagnosis
Pengguna dapat memilih gejala yang dialami untuk mendapatkan diagnosis terkait kondisi kulit mereka menggunakan metode Certainty Factor.

### 3. Melihat Akurasi
Setelah diagnosis selesai, pengguna dapat melihat tingkat akurasi dari hasil yang diberikan oleh sistem berdasarkan gejala yang dipilih.

### 4. Tes Ulang
Jika pengguna ingin mencoba tes ulang untuk memperoleh hasil yang lebih akurat, mereka dapat mengulang proses diagnosis.

### 5. Melihat Riwayat
Pengguna dapat melihat riwayat diagnosis yang telah dilakukan sebelumnya melalui halaman riwayat.

---

## Teknologi yang Digunakan
- **Backend**: Laravel 10
- **Frontend**: Tailwind CSS, Blade
- **Database**: MySQL
- **Queue**: Laravel Queues untuk pemrosesan background

---

## Kontribusi

Terima kasih telah mempertimbangkan untuk berkontribusi pada proyek ini! Anda dapat mengajukan pull request untuk meningkatkan aplikasi ini. Pastikan untuk mengikuti pedoman kontribusi yang ada dalam [dokumen kontribusi Laravel](https://laravel.com/docs/contributions).

---

## Lisensi

ExpertSkinCF menggunakan lisensi **MIT**. Lihat file [LICENSE](LICENSE) untuk detail lebih lanjut.

---

## Kontak

Jika Anda memiliki pertanyaan atau saran, silakan hubungi kami melalui email di: `support@expertskincf.com`.
```

README ini sudah disusun dengan lebih rapi, jelas, dan terstruktur agar memudahkan pemahaman pembaca tentang aplikasi, fitur-fitur yang disediakan, dan instruksi penggunaannya. Pastikan untuk mengganti informasi yang relevan seperti URL repositori dan email kontak sesuai dengan kebutuhan Anda.
