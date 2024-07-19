<?php
include 'includes/db.php';

if (isset($_POST['save'])) {
    // Save data diri
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $conn->query("INSERT INTO data_diri (nama, email, alamat) VALUES ('$nama', '$email', '$alamat')");

    // Save artikel
    $judul_artikel = $_POST['judul_artikel'];
    $konten_artikel = $_POST['konten_artikel'];
    $conn->query("INSERT INTO artikel (judul, konten) VALUES ('$judul_artikel', '$konten_artikel')");

    // Save portofolio
    $judul_portofolio = $_POST['judul_portofolio'];
    $deskripsi_portofolio = $_POST['deskripsi_portofolio'];
    $conn->query("INSERT INTO portofolio (judul, deskripsi) VALUES ('$judul_portofolio', '$deskripsi_portofolio')");

    header('Location: index.php');
}
?>
