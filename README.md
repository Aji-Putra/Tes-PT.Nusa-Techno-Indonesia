Tes sederhana untuk posisi Laravel Developer di PT. Nusa Techno Indonesia.

---

## 🚀 Fitur

- Tambah produk baru  
- Lihat daftar produk  
- Edit data produk  
- Hapus produk  
- Validasi input menggunakan Laravel Validation  
- Tampilan menggunakan Blade dan Bootstrap  

---

## ✅ Requirements

- PHP >= 8.x  
- Composer  
- MySQL atau database lain  

---

## ⚙️ Instalasi

```bash
# 1. Clone repository
git clone https://github.com/Aji-Putra/Tes-PT.Nusa-Techno-Indonesia.git
cd nama-repo

# 2. Install dependencies
composer install

# 3. Salin file .env
cp .env.example .env

# 4. Generate application key
php artisan key:generate

# 5. Konfigurasi Database file .env
DB_DATABASE=nama_database_anda
DB_USERNAME=username_anda
DB_PASSWORD=password_anda

# 6. Jalankan migrasi dan seeder (jika ada)
php artisan migrate --seed

# 7. Jalankan aplikasi
php artisan serve
