<?php include 'includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Manage Data</title>
</head>
<body>
    <div class="container">
        <h1>Manage Profil</h1>
        <form action="process.php" method="post">
            <div class="form-section">
                <h2>Data Diri</h2>
                <label>Nama:</label>
                <input type="text" name="nama">
                <label>Email:</label>
                <input type="email" name="email">
                <label>Alamat:</label>
                <input type="text" name="alamat">
            </div>
            <div class="form-section">
                <h2>Artikel</h2>
                <label>Judul:</label>
                <input type="text" name="judul_artikel">
                <label>Konten:</label>
                <textarea name="konten_artikel"></textarea>
            </div>
            <div class="form-section">
                <h2>Portofolio</h2>
                <label>Judul:</label>
                <input type="text" name="judul_portofolio">
                <label>Deskripsi:</label>
                <textarea name="deskripsi_portofolio"></textarea>
            </div>
            <button type="submit" name="save">Save</button>
        </form>
        <a href="index.php">Back to Profile</a>
    </div>
</body>
</html>
