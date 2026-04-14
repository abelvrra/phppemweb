<?php
session_start();
include "config.php";

if(isset($_POST['upload'])){
    $nama_file = $_FILES['foto']['name'];
    $ukuran_file = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmp_name = $_FILES['foto']['tmp_name'];

    // Cek apakah ada gambar yang dipilih
    if($error === 0){
        // Pindahkan file dari folder sementara ke folder 'img'
        move_uploaded_file($tmp_name, 'img/' . $nama_file);

        // Update nama file di database berdasarkan user yang login
        $nama_user = $_SESSION['nama'];
        mysqli_query($conn, "UPDATE users SET foto='$nama_file' WHERE nama='$nama_user'");

        // Update session foto agar langsung berubah di dashboard
        $_SESSION['foto'] = $nama_file;

        echo "<script>alert('Foto berhasil diupdate!'); window.location='dashboard.php';</script>";
    } else {
        echo "<script>alert('Gagal mengunggah gambar');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card p-4 mx-auto" style="width: 400px;">
            <h4>Ganti Foto Profil</h4>
            <form method="POST" enctype="multipart/form-data">
                <input type="file" name="foto" class="form-control mb-3" required>
                <button type="submit" name="upload" class="btn btn-primary w-100">Simpan Foto</button>
                <a href="dashboard.php" class="btn btn-secondary w-100 mt-2">Batal</a>
            </form>
        </div>
    </div>
</body>
</html>