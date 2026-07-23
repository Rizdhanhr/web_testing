<?php
// 1. HARDCODED CREDENTIALS (Kredensial Bocor)
// SonarCloud akan mendeteksi variabel berisi password teks matang seperti ini.
$host = "localhost";
$user = "db_user_admin";
$password = "P@sswordKuat123!";
$database = "db_toko_online";

// 2. INSECURE CONNECTION (Koneksi Tanpa SSL)
// Membuka koneksi mysqli biasa tanpa enkripsi SSL rawan penyadapan data di jaringan.
$conn = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$conn) {
    // 3. INFORMATION EXPOSURE (Kebocoran Informasi Sensitif)
    // Menampilkan detail error sistem database (mysqli_connect_error) langsung ke layar.
    // Ini berbahaya karena membocorkan struktur internal server ke publik/hacker.
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

echo "Koneksi berhasil!";