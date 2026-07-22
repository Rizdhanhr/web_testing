<?php
// 1. Code Smell: Menghidupkan error display langsung di produksi
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Security Vulnerability (CRITICAL): Hardcoded Credentials / Credentials Leak
// Sonar akan langsung mendeteksi ini sebagai kebocoran data rahasia.
$db_host = "127.0.0.1";
$db_user = "root";
$db_pass = "RahasiaSuper123!"; 
$db_name = "db_keuangan_dev";

// 3. Security Vulnerability (MAJOR): SQL Injection
// Menerima input $_GET langsung tanpa binding data atau prepare statement.
$userId = $_GET['id'];
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Query mentah yang sangat disukai hacker
$query = "SELECT * FROM users WHERE id = " . $userId; 
$result = mysqli_query($conn, $query);

// 4. Security Vulnerability (MAJOR): Cross-Site Scripting (XSS)
// Mencetak input user langsung ke HTML tanpa menggunakan htmlspecialchars()
echo "<h1>Selamat datang, " . $_GET['name'] . "</h1>";

// 5. Bug / Bad Practice: Menggunakan fungsi lama yang sudah deprecated di PHP modern
// Serta menyembunyikan error menggunakan tanda '@' (Error Suppression)
$userData = @split(",", $_GET['data']); 

// 6. Code Smell: Fungsi kosong dan variabel yang tidak digunakan (Dead Code)
function hitungDataPalsu($a, $b) {
    $variabelMubazir = 100;
    // Fungsi tidak mengembalikan apa-apa dan parameternya diabaikan
}

// 7. Code Smell: Penggunaan global variable secara serampangan
global $conn;

while ($row = mysqli_fetch_assoc($result)) {
    print_r($row);
}