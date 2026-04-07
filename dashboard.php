<?php
session_start();

// Proteksi halaman: Jika belum login, tendang ke login.php
if(!isset($_SESSION['nama'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Tiket Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .navbar-brand { font-weight: bold; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
        <div class="container">
            <a class="navbar-brand" href="#">Tiket Wisata</a>
            <div class="navbar-nav ms-auto">
                <span class="nav-link text-white me-3">Halo, <strong><?php echo $_SESSION['nama']; ?></strong> 👋</span>
                <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row mb-4">
            <div class="col">
                <h3>Daftar Wisata Tersedia</h3>
                <p class="text-muted">Pilih destinasi favoritmu dan beli tiketnya sekarang.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Wisata Gunung</h5>
                        <p class="card-text text-success fw-bold">Harga: Rp20.000</p>
                        <button class="btn btn-primary w-100" onclick="beliTiket('Gunung')">Beli Tiket</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Wisata Pantai</h5>
                        <p class="card-text text-success fw-bold">Harga: Rp25.000</p>
                        <button class="btn btn-primary w-100" onclick="beliTiket('Pantai')">Beli Tiket</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Wisata Air Terjun</h5>
                        <p class="card-text text-success fw-bold">Harga: Rp15.000</p>
                        <button class="btn btn-primary w-100" onclick="beliTiket('Air Terjun')">Beli Tiket</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Museum Sejarah</h5>
                        <p class="card-text text-success fw-bold">Harga: Rp10.000</p>
                        <button class="btn btn-primary w-100" onclick="beliTiket('Museum')">Beli Tiket</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Kebun Binatang</h5>
                        <p class="card-text text-success fw-bold">Harga: Rp50.000</p>
                        <button class="btn btn-primary w-100" onclick="beliTiket('Kebun Binatang')">Beli Tiket</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Taman Hiburan</h5>
                        <p class="card-text text-success fw-bold">Harga: Rp75.000</p>
                        <button class="btn btn-primary w-100" onclick="beliTiket('Taman Hiburan')">Beli Tiket</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function beliTiket(namaWisata) {
            alert("Terima kasih! Tiket untuk " + namaWisata + " berhasil dipesan oleh <?php echo $_SESSION['nama']; ?>.");
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>