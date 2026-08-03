<?php

// Contoh kode yang akan langsung terdeteksi oleh SonarQube
$db_host = "localhost";
$db_user = "root";
$db_password = "1234567"; // Hardcoded password - S2068
$db_name = "my_database";

// Fungsi koneksi ini akan memicu rule S2068 di SonarQube
$connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$connection) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "Koneksi berhasil!";

// ==========================================
// SQL Injection - S3649
// ==========================================
$user_id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = " . $user_id; // langsung concat input user
$result = mysqli_query($connection, $query);

// ==========================================
// XSS - S5131
// ==========================================
$nama = $_GET['nama'];
echo "Halo, " . $nama; // output user input tanpa sanitize/escape

// ==========================================
// Weak Cryptography - S4790 (MD5 untuk password)
// ==========================================
$password_input = $_POST['password'];
$hashed = md5($password_input); // MD5 dianggap lemah

// ==========================================
// Insecure Random - S2245
// ==========================================
$otp = rand(100000, 999999); // rand() bukan cryptographically secure

