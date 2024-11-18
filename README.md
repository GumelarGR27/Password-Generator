**Password Generator | CodeIgniter 4 dan Bootstrap**

Aplikasi sederhana untuk menghasilkan password acak, menggunakan CodeIgniter 4 sebagai framework backend dan Bootstrap untuk antarmuka.

**Fitur**
- Menghasilkan password acak dengan kombinasi huruf kecil, huruf besar, angka, dan karakter spesial.
- Panjang password dapat dikustomisasi (minimal 8 karakter).
- Menggunakan metode secure random untuk memastikan keamanan.
- Antarmuka dengan Bootstrap.
  
**Instalasi**
1. Clone Repository

git clone https://github.com/username/password-generator.git
cd password-generator

2. Install Dependencies Pastikan Anda telah menginstal CodeIgniter 4:

composer install

3. Setup Bootstrap Jika menggunakan package manager:

npm install bootstrap
Atau gunakan Bootstrap CDN (sudah disertakan di file layout).

4. Konfigurasi Environment Salin file .env.example menjadi .env:

cp .env.example .env
Sesuaikan pengaturan dasar seperti baseURL.

5. Jalankan Server Gunakan perintah bawaan CodeIgniter untuk menjalankan server:

php spark serve
Akses aplikasi di http://localhost:8080.

**Penggunaan**
- Buka aplikasi di browser.
- Masukkan panjang password yang diinginkan.
- Klik tombol Generate Password.
- Hasil password akan ditampilkan di layar.

**Teknologi yang Digunakan**
- CodeIgniter 4: Framework PHP untuk backend.
- Bootstrap 5: Framework CSS untuk antarmuka pengguna.
- PHP 7.4+: Bahasa pemrograman utama.
