<?php
require 'functions.php'; // Tambahkan ini untuk menggunakan fungsi dari functions.php

// Koneksi ke Database (sesuaikan dengan database yang sama untuk kedua website)
$conn = new mysqli("localhost", "root", "", "peminjaman_alat");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Cek apakah data dari form sudah diterima
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nis']) && isset($_POST['name']) && isset($_POST['class']) && isset($_POST['date']) && isset($_POST['tools'])) {
        
        // Ambil data dari form
        $nis = $_POST['nis'];
        $name = $_POST['name'];
        $class = $_POST['class'];
        $tanggal_peminjaman = $_POST['date'];
        $alat_yang_dipilih = $_POST['tools'];

        // Menggunakan prepared statement untuk keamanan
        $stmt = $conn->prepare("INSERT INTO peminjaman (nis, name, class, tanggal_peminjaman, alat_yang_dipilih) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("issss", $nis, $name, $class, $tanggal_peminjaman, $alat_yang_dipilih);

        // Eksekusi query
        if ($stmt->execute()) {
            // Arahkan ke halaman lain
            header("Location: user.php");
            exit(); // Penting untuk menghentikan eksekusi skrip setelah redirect
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Data tidak lengkap. Pastikan semua field diisi.";
    }
}

$conn->close();
?>