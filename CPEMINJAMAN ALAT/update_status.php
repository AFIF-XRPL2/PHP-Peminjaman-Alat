<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "peminjaman_alat");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari request
    $nis = $_POST['id'];  // Menggunakan NIS
    $status = $_POST['status'];

    // Update status di database
    $sql = "UPDATE peminjaman SET status='$status' WHERE nis='$nis'";

    if ($conn->query($sql) === TRUE) {
        echo "Status berhasil diperbarui!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi
$conn->close();
?>
