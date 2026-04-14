<?php
session_start();
include "config.php";

// 1. Proteksi Halaman
if(!isset($_SESSION['nama'])){
    header("Location: login.php");
    exit();
}

// 2. Logika Warna Badge Role
$role_badge = ($_SESSION['role'] == 'admin') ? 'bg-danger' : 'bg-success';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Tiket Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f7f6; }
        .navbar-brand { font-weight: bold; }
        .profile-img { width: 80px; height: 80px; object-fit: cover; border: 3px solid #fff; }
        .card { border-radius: 12px; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Tiket Wisata</a>
            <div class="navbar-nav ms-auto">
                <?php if($_SESSION['role'] == 'user'): ?>
                    <a href="transaksi.php" class="nav-link text-white me-3">Tiket Saya</a>
                    <a href="transaksi.php" class="nav-link text-white me-3">Profil</a>
                    <a href="transaksi.php" class="nav-link text-white me-3">Riwayat Transaksi</a>
                <?php endif; ?>
                <a href="logout.php" class="btn btn-light btn-sm fw-bold">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card mb-4 shadow-sm border-0">
            <div class="card-body d-flex align-items-center">
                <img src="img/<?php echo $_SESSION['foto']; ?>" class="rounded-circle profile-img shadow-sm me-3">
                <div>
                    <h4 class="mb-0"><?php echo $_SESSION['nama']; ?></h4>
                    <span class="badge <?php echo $role_badge; ?> mb-2">
                        <?php echo strtoupper($_SESSION['role']); ?>
                    </span>
                    <br>
                    <a href="edit_profil.php" class="btn btn-sm btn-outline-primary py-0">Ganti Foto</a>
                </div>
            </div>
        </div>

        <?php if($_SESSION['role'] == 'admin'): ?>
            <div class="row">
                <div class="col-12 text-center py-5">
                    <div class="alert alert-info shadow-sm">
                        <h3 class="mb-3">Selamat Datang di Panel Administrator</h3>
                        <p>Sebagai Admin, Anda dapat mengelola data destinasi dan melihat laporan penjualan.</p>
                        <hr>
                        <a href="kelola_wisata.php" class="btn btn-dark btn-lg px-5">Mulai Kelola Data Wisata</a>
                    </div>
                </div>
            </div>

        <?php else: ?>
            <div class="row mt-4">
                <div class="col-12 mb-3 text-center">
                    <h3>Pilih Destinasi Favoritmu</h3>
                    <p class="text-muted">Silakan pilih tiket yang ingin Anda pesan hari ini.</p>
                    <hr>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0 text-center p-3">
                        <div class="card-body">
                            <h5>Wisata Gunung</h5>
                            <p class="text-success fw-bold">Harga: Rp20.000</p>
                            <a href="proses_beli.php?wisata=Wisata Gunung&harga=20000" 
                                class="btn btn-primary w-100" 
                                onclick="return confirm('Apakah anda yakin ingin membeli tiket ini?')">
                                Beli Tiket
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0 text-center p-3">
                        <div class="card-body">
                            <h5>Museum Sejarah</h5>
                            <p class="text-success fw-bold">Harga: Rp10.000</p>
                            <a href="proses_beli.php?wisata=Museum Sejarah&harga=10000" 
                                class="btn btn-primary w-100" 
                                onclick="return confirm('Apakah anda yakin ingin membeli tiket ini?')">
                                Beli Tiket
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0 text-center p-3">
                        <div class="card-body">
                            <h5>Kebun Binatang</h5>
                            <p class="text-success fw-bold">Harga: Rp50.000</p>
                            <a href="proses_beli.php?wisata=Kebun Binatang&harga=50000" 
                                class="btn btn-primary w-100" 
                                onclick="return confirm('Apakah anda yakin ingin membeli tiket ini?')">
                                Beli Tiket
                            </a>
                         </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <footer class="text-center py-4 text-muted mt-5">
        <small>&copy; 2026 Tiket Wisata Online</small>
    </footer>

</body>
</html>