<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login_form.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>

    <!-- Box Icons  -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Styles  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/kxp_fav.png" type="image/x-icon">
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <div class="sidebar close">
        <!-- ========== Logo ============  -->
        <a href="#" class="logo-box">
        <i class="fa-solid fa-anchor"></i>
        
<div class="logo-name"><b>SMKN 10</b></div>
        </a>

        <!-- ========== List ============  -->
        <ul class="sidebar-list">
            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-grid-alt'></i>
                        <span class="name">Dashboard</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Dashboard</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-collection'></i>
                        <span class="name">Category</span>
                    </a>
                    <i class='bx bxs-chevron-down'></i>
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Category</a>
                    <a href="#" class="link">Data Peminjam</a>
                    <a href="#" class="link">Daftar Alat</a>
                    <a href="#" class="link">Table Guru</a>
                </div>
            </li>

            <!-- -------- Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-book-alt'></i>
                        <span class="name">Posts</span>
                    </a>
                    <i class='bx bxs-chevron-down'></i>
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Posts</a>
                    <a href="#" class="link">Portofolio</a>
                    <a href="#" class="link">Prestasi Guru</a>
                    <a href="#" class="link">Jadwal Piket</a>
                </div>
            </li>

            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-line-chart'></i>
                        <span class="name">Analytics</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Analytics</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-pie-chart-alt-2'></i>
                        <span class="name">Chart</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Chart</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-extension'></i>
                        <span class="name">Maintenance</span>
                    </a>
                    <i class='bx bxs-chevron-down'></i>
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Maintenance</a>
                    <a href="#" class="link">Alat</a>
                    <a href="#" class="link">Website</a>
                    <a href="#" class="link">Fasilitas</a>
                </div>
            </li>

            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-compass'></i>
                        <span class="name">Explore</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Explore</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-history'></i>
                        <span class="name">History</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">History</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-cog'></i>
                        <span class="name">Settings</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Settings</a>
                    <!-- submenu links here  -->
                </div>
            </li>
        </ul>
    </div>

    <!-- ============= Home Section =============== -->
    <header class="home">
        <div class="toggle-sidebar">
            <i class='bx bx-menu'></i>
        </div>
        <!-- Bagian Baru -->

        <div class="table">
    <div class="table_header">
        <p>DATA PEMINJAMAN ALAT</p>
        <div>
            <input id="search-input" placeholder="Search...">
            <button class="add_new" onclick="window.location.href='user.php';">BACK TO USER</button>
        </div>
    </div>
<?php
// Koneksi ke database yang sama
$conn = new mysqli("localhost", "root", "", "peminjaman_alat");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data dari tabel peminjaman
$sql = "SELECT * FROM peminjaman";
$result = $conn->query($sql);
?>

<div class="table_section" >
<table>
<thead>
    <tr>
        <th >No.</th>
        <th  >NIS/NIK</th>
        <th  >Nama</th>
        <th  >Kelas /<br>Jabatan</th>
        <th >Date</th>
        <th >Nama Alat</th>
        <th  >Request</th> <!-- Kolom Request -->
        <th  >Status</th>
    </tr>
</thead>
<tbody>
<?php
if ($result->num_rows > 0) {
    $no = 1;
    
    while($row = $result->fetch_assoc()) {
        $requestText = $row['status'] === 'diterima' ? 'Diterima' :
                       ($row['status'] === 'ditolak' ? 'Ditolak' :
                       ($row['status'] === 'dikembalikan' ? 'Dikembalikan' : ''));

        echo "<tr>
            <td>" . $no++ . "</td>
            <td>" . $row['nis'] . "</td>
            <td>" . $row['name'] . "</td>
            <td>" . $row['class'] . "</td>
            <td>" . $row['tanggal_peminjaman'] . "</td>
            <td>" . $row['alat_yang_dipilih'] . "</td>
            <td>" . $requestText . "</td>
            <td>
                <button class='status-button diterima' onclick=\"updateStatus('" . $row['nis'] . "', 'diterima')\">Terima</button>
                <button class='status-button ditolak' onclick=\"updateStatus('" . $row['nis'] . "', 'ditolak')\">Tolak</button>
                <button class='status-button dikembalikan' onclick=\"updateStatus('" . $row['nis'] . "', 'dikembalikan')\">Kembalikan</button>
            </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='8'>Belum ada data peminjaman.</td></tr>";
}
$conn->close();
?>


</tbody>
</table>
</div>


</div>
</header>


    <!-- Link JS -->
    <script src="admin.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
</body>

</html>

