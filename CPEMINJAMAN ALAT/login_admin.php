<?php
session_start();

// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'peminjaman_alat');

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk mencari username dan password
$sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Jika username dan password sesuai, simpan session dan redirect ke alat_admin.php
    $_SESSION['username'] = $username;
    header("Location: alat_admin.php");
    exit();
} else {
    // Jika username atau password salah, kembali ke halaman login dengan pesan error
    header("Location: form_login.php?error=Username atau password salah");
    exit();
}

$conn->close();
?>
