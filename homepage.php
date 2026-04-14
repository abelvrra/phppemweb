<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Selamat Datang di Tiket Wisata</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .hero-section {
      background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), 
                  url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');
      background-size: cover;
      background-position: center;
      height: 80vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
    }
    .hero-content h1 {
      font-size: 3.5rem;
      font-weight: bold;
      text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="index.php">Tiket Wisata</a>
      <div class="ms-auto">
        <a href="login.php" class="btn btn-outline-light me-2">Login</a>
        <a href="register.php" class="btn btn-light">Daftar</a>
      </div>
    </div>
  </nav>

  <header class="hero-section">
    <div class="hero-content">
      <h1>Jelajahi Keindahan Alam</h1>
      <p class="lead mb-4">Temukan destinasi favoritmu dan pesan tiketnya sekarang juga dengan mudah.</p>
      <a href="login.php" class="btn btn-primary btn-lg px-5 py-3">Mulai Jelajah Sekarang</a>
    </div>
  </header>

  <div class="container my-5">
    <div class="row text-center">
      <div class="col-md-4">
        <div class="card p-4 border-0 shadow-sm">
          <h3>Mudah</h3>
          <p>Pesan tiket wisata favoritmu hanya dalam hitungan detik.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-4 border-0 shadow-sm">
          <h3>Lengkap</h3>
          <p>Tersedia berbagai destinasi mulai dari Gunung hingga Museum.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-4 border-0 shadow-sm">
          <h3>Cepat</h3>
          <p>Sistem otomatis yang langsung memberikan konfirmasi pembelian tiket.</p>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-dark text-white text-center py-4">
    <p>&copy; Tiket Wisata </p>
  </footer>

</body>
</html>