<?php

// Contoh kode yang akan langsung terdeteksi oleh SonarQube
$db_host = "localhost";
$db_user = "root";
$db_pass = "1234567"; // Hardcoded password yang langsung dipakai fungsi sensitif
$db_name = "my_database";

// Fungsi koneksi ini akan memicu rule S2068 di SonarQube
$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$connection) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "Koneksi berhasil!";

