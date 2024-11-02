<?php
require 'functions.php';

// Koneksi ke Database
$conn = new mysqli("localhost", "root", "", "peminjaman_alat");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil semua data peminjaman dari database
$sql = "SELECT nis, name, class, tanggal_peminjaman, alat_yang_dipilih, status FROM peminjaman";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEMINJAMAN ALAT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="loading-overlay">
    <img src="baita-ts.png" alt="Loading..." id="loading-image">
</div>


    <!--HEADER-->
    
    

    <!--alat-->
    
    <div class="carousel" id="home">
        <div class="list">
            <div class="item">
                <img src="pc.png" alt="">
                <div class="intro">
                    <div class="title">
                        PEMINJAMAN ALAT
                    </div>
                    <div class="topic">
                        LAPTOP
                    </div>
                    <div class="des">
                        Laptop adalah perangkat komputer portabel yang dirancang untuk kemudahan penggunaan di berbagai lokasi. Laptop biasanya memiliki ukuran lebih kecil dan ringan dibandingkan dengan komputer desktop, memungkinkan pengguna untuk membawa dan menggunakannya di mana saja, baik di rumah, kantor, sekolah, atau saat bepergian.
                    </div>
                    <button class="seeMore">
                        Lihat Detail
                    </button>
                </div>
                <div class="detail">
                    <div class="title">
                        Laptop
                    </div>
                    <div class="des">
                        Laptop adalah perangkat komputer portabel yang dirancang untuk kemudahan penggunaan di berbagai lokasi. Laptop biasanya memiliki ukuran lebih kecil dan ringan dibandingkan dengan komputer desktop, memungkinkan pengguna untuk membawa dan menggunakannya di mana saja, baik di rumah, kantor, sekolah, atau saat bepergian.
                    </div>
                    <div class="spesification">
                        <div>
                            <p>Kegunaan</p>
                            <p>Mengolah data, menjalankan aplikasi, dan berinteraksi dengan perangkat digital.</p>
                        </div>
                        <div>
                            <p>Prosesor</p>
                            <p>Intel i7 atau AMD Ryzen 7</p>
                        </div>
                        <div>
                            <p>RAM</p>
                            <p>16GB DDR4</p>
                        </div>
                        <div>
                            <p>Penyimpanan</p>
                            <p>SSD 512GB</p>
                        </div>
                        <div>
                            <p>Kelebihan</p>
                            <p>Performa tinggi dan multi-tasking.</p>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            <div class="item">
                <img src="monitor.png" alt="">
                <div class="intro">
                    <div class="title">
                        PEMINJAMAN ALAT
                    </div>
                    <div class="topic">
                        PROYEKTOR
                    </div>
                    <div class="des">
                        Proyektor adalah perangkat optik yang digunakan untuk menampilkan gambar, video, atau presentasi pada permukaan yang lebih besar, seperti layar atau dinding. Proyektor berfungsi dengan memancarkan cahaya melalui lensa untuk memperbesar tampilan dari sumber gambar atau video, seperti komputer, laptop, atau pemutar media.
                    </div>
                    <button class="seeMore">
                        Lihat Detail
                    </button>
                </div>
                <div class="detail">
                    <div class="title">
                        Proyektor
                    </div>
                    <div class="des">
                        Proyektor adalah perangkat optik yang digunakan untuk menampilkan gambar, video, atau presentasi pada permukaan yang lebih besar, seperti layar atau dinding. Proyektor berfungsi dengan memancarkan cahaya melalui lensa untuk memperbesar tampilan dari sumber gambar atau video, seperti komputer, laptop, atau pemutar media.
                    </div>
                    <div class="spesification">
                        <div>
                            <p>Kegunaan</p>
                            <p>Menampilkan output visual dari komputer.</p>
                        </div>
                        <div>
                            <p>Resolusi</p>
                            <p>1920x1080 (Full HD)</p>
                        </div>
                        <div>
                            <p>Ukuran Layar</p>
                            <p>24 inci</p>
                        </div>
                        <div>
                            <p>Tipe Panel</p>
                            <p>IPS</p>
                        </div>
                        <div>
                            <p>Kelebihan</p>
                            <p>Sudut pandang lebar dan akurasi warna tinggi.</p>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            <div class="item">
                <img src="printer.png" alt="">
                <div class="intro">
                    <div class="title">
                        PEMINJAMAN ALAT
                    </div>
                    <div class="topic">
                        PRINTER
                    </div>
                    <div class="des">
                        Printer adalah perangkat keluaran yang digunakan untuk mencetak dokumen, gambar, atau data digital dari komputer atau perangkat lain ke media cetak seperti kertas. Printer banyak digunakan di lingkungan rumah, kantor, dan institusi pendidikan untuk menghasilkan salinan fisik dari informasi digital.
                    </div>
                    <button class="seeMore">
                        Lihat Detail
                    </button>
                </div>
                <div class="detail">
                    <div class="title">
                        Printer
                    </div>
                    <div class="des">
                        Printer adalah perangkat keluaran yang digunakan untuk mencetak dokumen, gambar, atau data digital dari komputer atau perangkat lain ke media cetak seperti kertas. Printer banyak digunakan di lingkungan rumah, kantor, dan institusi pendidikan untuk menghasilkan salinan fisik dari informasi digital.
                    </div>
                    <div class="spesification">
                        <div>
                            <p>Kegunaan</p>
                            <p>Mencetak dokumen, gambar, dan data digital ke media cetak.</p>
                        </div>
                        <div>
                            <p>Tipe Printer</p>
                            <p>Laser</p>
                        </div>
                        <div>
                            <p>Kecepatan Cetak</p>
                            <p>20 ppm (pages per minute)</p>
                        </div>
                        <div>
                            <p>Konektivitas</p>
                            <p>USB, Wi-Fi</p>
                        </div>
                        <div>
                            <p>Kelebihan</p>
                            <p>Cetak cepat dan efisien dengan hasil kualitas tinggi.</p>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            <div class="item">
                <img src="headset.png" alt="" height="80%">
                <div class="intro">
                    <div class="title">
                        PEMINJAMAN ALAT
                    </div>
                    <div class="topic">
                        HEADSET
                    </div>
                    <div class="des">
                        Headset adalah perangkat audio yang dirancang untuk digunakan di kepala dan menggabungkan fungsi headphone dengan mikrofon. Headset memungkinkan pengguna untuk mendengarkan suara serta berkomunikasi melalui suara, membuatnya ideal untuk berbagai aplikasi seperti telekonferensi, gaming, dan mendengarkan musik.
                    </div>
                    <button class="seeMore">
                        Lihat Detail
                    </button>
                </div>
                <div class="detail">
                    <div class="title">
                        Headset
                    </div>
                    <div class="des">
                        Headset adalah perangkat audio yang dirancang untuk digunakan di kepala dan menggabungkan fungsi headphone dengan mikrofon. Headset memungkinkan pengguna untuk mendengarkan suara serta berkomunikasi melalui suara, membuatnya ideal untuk berbagai aplikasi seperti telekonferensi, gaming, dan mendengarkan musik.
                    </div>
                    <div class="spesification">
                        <div>
                            <p>Kegunaan</p>
                            <p>Mendengarkan audio dan berkomunikasi melalui mikrofon.</p>
                        </div>
                        <div>
                            <p>Tipe Koneksi</p>
                            <p>Bluetooth 5.0 / 3.5mm Jack</p>
                        </div>
                        <div>
                            <p>Durasi Baterai</p>
                            <p>15 Jam (Penggunaan terus-menerus)</p>
                        </div>
                        <div>
                            <p>Keunggulan</p>
                            <p>Noise-cancellation dan kualitas suara jernih.</p>
                        </div>
                        <div>
                            <p>Kelebihan</p>
                            <p>Ringan dan nyaman digunakan dalam waktu lama.</p>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            <div class="item">
                <img src="flash.png" alt="" height="70%">
                <div class="intro">
                    <div class="title">
                        PEMINJAMAN ALAT
                    </div>
                    <div class="topic">
                        FLASHDISK
                    </div>
                    <div class="des">
                        Flashdisk, juga dikenal sebagai USB flash drive, adalah perangkat penyimpanan data portabel yang menggunakan memori flash untuk menyimpan informasi digital. Flashdisk dirancang dengan ukuran yang kecil dan ringan, sehingga mudah dibawa ke mana saja, serta memiliki konektor USB yang dapat dihubungkan langsung ke komputer atau perangkat lain yang mendukung USB.
                    </div>
                    <button class="seeMore">
                        Lihat Detail
                    </button>
                </div>
                <div class="detail">
                    <div class="title">
                        Flashdisk
                    </div>
                    <div class="des">
                        Flashdisk, juga dikenal sebagai USB flash drive, adalah perangkat penyimpanan data portabel yang menggunakan memori flash untuk menyimpan informasi digital. Flashdisk dirancang dengan ukuran yang kecil dan ringan, sehingga mudah dibawa ke mana saja, serta memiliki konektor USB yang dapat dihubungkan langsung ke komputer atau perangkat lain yang mendukung USB.
                    </div>
                    <div class="spesification">
                        <div>
                            <p>Kegunaan</p>
                            <p>Menyimpan dan mentransfer data digital dengan mudah.</p>
                        </div>
                        <div>
                            <p>Kapasitas</p>
                            <p>64GB</p>
                        </div>
                        <div>
                            <p>Tipe Koneksi</p>
                            <p>USB 3.0</p>
                        </div>
                        <div>
                            <p>Keunggulan</p>
                            <p>Transfer data cepat dan tahan lama.</p>
                        </div>
                        <div>
                            <p>Kelebihan</p>
                            <p>Kecil, ringan, dan mudah dibawa ke mana saja.</p>
                        </div>
                    </div>
                    
    
                </div>
            </div>
            <div class="item">
                <img src="sapu.png" alt="" height="70%">
                <div class="intro">
                    <div class="title">
                        PEMINJAMAN ALAT
                    </div>
                    <div class="topic">
                        SAPU
                    </div>
                    <div class="des">
                        Sapu adalah alat pembersih yang digunakan untuk membersihkan permukaan seperti lantai, halaman, atau trotoar dari debu, kotoran, dan sampah ringan. Sapu umumnya terdiri dari kepala sapu yang terbuat dari bahan serat atau ijuk yang dipasang pada pegangan panjang, biasanya terbuat dari kayu, plastik, atau logam.
                    </div>
                    <button class="seeMore">
                        Lihat Detail
                    </button>
                </div>
                <div class="detail">
                    <div class="title">
                        Sapu
                    </div>
                    <div class="des">
                        Sapu adalah alat pembersih yang digunakan untuk membersihkan permukaan seperti lantai, halaman, atau trotoar dari debu, kotoran, dan sampah ringan. Sapu umumnya terdiri dari kepala sapu yang terbuat dari bahan serat atau ijuk yang dipasang pada pegangan panjang, biasanya terbuat dari kayu, plastik, atau logam.
                    </div>
                    <div class="spesification">
                        <div>
                            <p>Kegunaan</p>
                            <p>Membersihkan permukaan dari debu dan kotoran.</p>
                        </div>
                        <div>
                            <p>Bahan Kepala Sapu</p>
                            <p>Serat atau ijuk</p>
                        </div>
                        <div>
                            <p>Bahan Pegangan</p>
                            <p>Kayu, plastik, atau logam</p>
                        </div>
                        <div>
                            <p>Keunggulan</p>
                            <p>Ringan dan mudah digunakan untuk berbagai jenis permukaan.</p>
                        </div>
                        <div>
                            <p>Kelebihan</p>
                            <p>Hemat biaya, tahan lama, dan ramah lingkungan.</p>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <div class="arrows">
            <button id="prev"><</button>
            <button id="back">Go Back</button>
            <button id="next">></button>
        </div>
    </div>


    <!--CHECKBOX ALAT-->
    <section id="alat" class="select-tools">
        <div class="container" >
            <h1>Pilih Alat yang Ingin Dipinjam</h1>
            <div class="tools-wrapper">
                <!-- Tool 1 -->
                <div class="tool-item" data-aos="zoom-in">
                    <input type="checkbox" id="tool1" class="tool-checkbox">
                    <label for="tool1">
                        <img src="pc.png" alt="LAPTOP">
                        <p>LAPTOP</p>
                    </label>
                </div>
                <!-- Tool 2 -->
                <div class="tool-item" data-aos="zoom-in"  >
                    <input type="checkbox" id="tool2" class="tool-checkbox">
                    <label for="tool2">
                        <img src="monitor.png" alt="MONITOR">
                        <p>PROYEKTOR</p>
                    </label>
                </div>
                <!-- Tool 3 -->
                <div class="tool-item" data-aos="zoom-in"  >
                    <input type="checkbox" id="tool3" class="tool-checkbox">
                    <label for="tool3">
                        <img src="printer.png" alt="PRINTER">
                        <p>PRINTER</p>
                    </label>
                </div>
                <!-- Tool 4 -->
                <div class="tool-item" data-aos="zoom-in"  >
                    <input type="checkbox" id="tool4" class="tool-checkbox">
                    <label for="tool4">
                        <img src="sapu.png" alt="SAPU">
                        <p>SAPU</p>
                    </label>
                </div>
                <!-- Tool 5 -->
                <div class="tool-item" data-aos="zoom-in"  >
                    <input type="checkbox" id="tool5" class="tool-checkbox">
                    <label for="tool5">
                        <img src="flash.png" alt="FLASH DISH">
                        <p>FLASH DISK</p>
                    </label>
                </div>
                <!-- Tool 6 -->
                <div class="tool-item" data-aos="zoom-in"  >
                    <input type="checkbox" id="tool6" class="tool-checkbox">
                    <label for="tool6">
                        <img src="headset.png" alt="HEADSET">
                        <p>HEADSET</p>
                    </label>
                </div>
            </div>
            <button class="submit-selection" data-aos="fade-up"
            data-aos-duration="2000">PILIH ALAT</button>
        </div>
    </section>

    <!-- Form Data Diri -->
<!-- Form Data Diri -->
<section id="registrasi" class="personal-info">
    <div id="selectedToolsContainer" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine"
     data-aos-duration="1000">
        <h2>Alat yang Dipilih:</h2>
        <div id="selectedToolsList" class="tools-wrapper"></div>
    </div>
    
    <div class="container" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine"
     data-aos-duration="1000">
        <h1>Data Diri</h1>
        <form id="personalInfoForm" method="POST" action="submit_form.php">

            

              
            <div class="form-group">
                <label for="nis">NIS/NIK:</label>
                <input type="number" id="nis" name="nis" inputmode="numeric" placeholder="Masukan NIS" required>
            </div>
            
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" placeholder="Masukan Nama Lengkap">
            </div>
            <div class="form-group">
                <label for="class">Kelas/Jabatan :</label>
                <input type="text" id="class" name="class" placeholder="Masukan Kelas">
            </div>
            <div class="form-group">
                <label for="date">Tanggal Peminjaman:</label>
                <input type="date" id="date" name="date" required>
            </div>
            
            
            <input type="hidden" id="selectedToolsInput" name="tools">
            
            <button type="submit" class="submit-info">KIRIM DATA </button>
            

        </form>
    </div>
</section>

<section class="section-data">
    <div class="section-header">
        <h2>Data Peminjaman Alat</h2>
    </div>

    <div class="card-container">
<?php
// Menampilkan data terbaru di urutan pertama berdasarkan tanggal_peminjaman
$sql = "SELECT nis, name, class, tanggal_peminjaman, alat_yang_dipilih, status FROM peminjaman ORDER BY tanggal_peminjaman DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        ?>
        <div class="card" data-aos="flip-left" data-aos-duration="2000">
            <h3 class="ha3"><?php echo $row['name']; ?></h3>
            <p>NIS/NIK: <?php echo $row['nis']; ?></p>
            <p>Kelas/Jabatan Guru: <?php echo $row['class']; ?></p>
            <p>Tanggal Peminjaman: <?php echo $row['tanggal_peminjaman']; ?></p>
            <p>Alat yang Dipinjam: <?php echo $row['alat_yang_dipilih']; ?></p>
            <div class="status <?php 
                if ($row['status'] == 'diterima') {
                    echo 'accepted'; 
                } elseif ($row['status'] == 'ditolak') {
                    echo 'rejected';
                } elseif ($row['status'] == 'dikembalikan') {
                    echo 'returned';
                } else {
                    echo 'pending';
                }
            ?>">
                <?php 
                if ($row['status'] == 'diterima') {
                    echo 'Diterima'; 
                } elseif ($row['status'] == 'ditolak') {
                    echo 'Ditolak';
                } elseif ($row['status'] == 'dikembalikan') {
                    echo 'Dikembalikan';
                } else {
                    echo 'Pending';
                }
                ?>
            </div>
        </div>
        <?php
    }
} else {
    echo "Tidak ada data peminjaman.";
}
?>

        

    </div>
</section>

<!--FOOTER-->
<footer class="footer">
    <div class="cantainer">
        <div class="raw">
            <div class="footer-col">
                <h4>company</h4>
                <ul class="f">
                    <li><a href="#">about us</a></li>
                    <li><a href="#">our services</a></li>
                    <li><a href="#">privacy police</a></li>
                    <li><a href="#">affliate program</a></li>
                </ul>
                
                

            </div>
            <div class="footer-col">
                <h4>get help</h4>
                <ul class="f">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">shipping</a></li>
                    <li><a href="#">return</a></li>
                    <li><a href="#">order</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>peminjam alat</h4>
                <ul class="f">
                    <li><a href="#">laptop</a></li>
                    <li><a href="#">proyektor</a></li>
                    <li><a href="#">headset</a></li>
                    <li><a href="#">printer</a></li>
                    
                </ul>
            </div>
            <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
    <a href="https://cat-bounce.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
    <a href="https://www.rrrgggbbb.com/" target="_blank"><i class="fa-brands fa-youtube"></i></a>
    <a href="https://puginarug.com/" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
    <a href="https://eelslap.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>

    

</div>

            </div>
        </div>

  
    </div>

    

    <!-- Tambahkan div container pembungkus di sekitar tombol .dmin -->
<div class="button-container">
    <button class="dmin" onclick="window.location.href='login_form.php';">
        <span class="btn-text-one" id="sp">ADMIN</span>
        <span class="btn-text-two" id="sp">LOGIN</span>
    </button>
</div>



</footer>
<!--END FOOTER-->

    <script src="user.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
</body>
</html>
<?php
$conn->close();
?>
