<?php
// functions.php

// Koneksi ke Database
function getConnection() {
    $conn = new mysqli("localhost", "root", "", "peminjaman_alat");
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
    return $conn;
}
?>
