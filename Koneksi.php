<?php
// Konfigurasi Database
define('DB_HOST', 'localhost');
define('DB_USER', 'root');              // Username database Anda (bawaan biasanya root)
define('DB_PASS', '');                  // Password database Anda (bawaan biasanya kosong)
define('DB_NAME', 'db_latihan_pbo_trpl 1a_maghfira'); // Ganti dengan nama database Anda

try {
    // Membuat koneksi ke database menggunakan PDO
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Menampilkan error jika terjadi masalah
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Mengembalikan hasil query berupa array asosiatif
        PDO::ATTR_EMULATE_PREPARES   => false,                  // Menggunakan prepared statement bawaan MySQL asli
    ];
    
    $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
    
    // Baris di bawah ini bisa Anda aktifkan (uncomment) untuk mengetes awal koneksi
    // echo "Koneksi ke database berhasil!"; 

} catch (PDOException $e) {
    // Jika koneksi gagal, hentikan program dan tampilkan pesan error
    die("Koneksi database gagal: " . $e->getMessage());
}
?>