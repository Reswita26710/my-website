<?php include 'includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Reswita</title>
</head>
<body>
    <div class="container">
        <h1>Profil Saya</h1>
        <div class="section">
            <h2>Data Diri</h2>
            <?php
            $result = $conn->query("SELECT * FROM data_diri");
            while ($row = $result->fetch_assoc()) {
                echo "<div class='card'>";
                echo "<p>Nama: " . $row['nama'] . "</p>";
                echo "<p>Email: " . $row['email'] . "</p>";
                echo "<p>Alamat: " . $row['alamat'] . "</p>";
                echo "<a href='update.php?type=data_diri&id=" . $row['id'] . "' class='btn'>Update</a>";
                echo "<a href='delete.php?type=data_diri&id=" . $row['id'] . "' class='btn'>Delete</a>";
                echo "</div>";
            }
            ?>
        </div>
        <div class="section">
            <h2>Artikel</h2>
            <?php
            $result = $conn->query("SELECT * FROM artikel");
            while ($row = $result->fetch_assoc()) {
                echo "<div class='card'>";
                echo "<h3>" . $row['judul'] . "</h3>";
                echo "<p>" . $row['konten'] . "</p>";
                echo "<a href='update.php?type=artikel&id=" . $row['id'] . "' class='btn'>Update</a>";
                echo "<a href='delete.php?type=artikel&id=" . $row['id'] . "' class='btn'>Delete</a>";
                echo "</div>";
            }
            ?>
        </div>
        <div class="section">
            <h2>Portofolio</h2>
            <?php
            $result = $conn->query("SELECT * FROM portofolio");
            while ($row = $result->fetch_assoc()) {
                echo "<div class='card'>";
                echo "<h3>" . $row['judul'] . "</h3>";
                echo "<p>" . $row['deskripsi'] . "</p>";
                echo "<a href='update.php?type=portofolio&id=" . $row['id'] . "' class='btn'>Update</a>";
                echo "<a href='delete.php?type=portofolio&id=" . $row['id'] . "' class='btn'>Delete</a>";
                echo "</div>";
            }
            ?>
        </div>
        <a href="manage.php" class="btn">Manage Data</a>
    </div>
</body>
</html>
