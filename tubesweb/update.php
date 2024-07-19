<?php 
include 'includes/db.php'; 

$type = $_GET['type'];
$id = $_GET['id'];

if ($type == 'data_diri') {
    $query = $conn->query("SELECT * FROM data_diri WHERE id=$id");
    $data = $query->fetch_assoc();
} elseif ($type == 'artikel') {
    $query = $conn->query("SELECT * FROM artikel WHERE id=$id");
    $data = $query->fetch_assoc();
} elseif ($type == 'portofolio') {
    $query = $conn->query("SELECT * FROM portofolio WHERE id=$id");
    $data = $query->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($type == 'data_diri') {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $conn->query("UPDATE data_diri SET nama='$nama', email='$email', alamat='$alamat' WHERE id=$id");
    } elseif ($type == 'artikel') {
        $judul = $_POST['judul'];
        $konten = $_POST['konten'];
        $conn->query("UPDATE artikel SET judul='$judul', konten='$konten' WHERE id=$id");
    } elseif ($type == 'portofolio') {
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];
        $conn->query("UPDATE portofolio SET judul='$judul', deskripsi='$deskripsi' WHERE id=$id");
    }
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Update Data</title>
</head>
<body>
    <div class="container">
        <h1>Update <?php echo ucfirst($type); ?></h1>
        <form action="" method="post">
            <?php if ($type == 'data_diri'): ?>
                <label>Nama:</label>
                <input type="text" name="nama" value="<?php echo $data['nama']; ?>">
                <label>Email:</label>
                <input type="email" name="email" value="<?php echo $data['email']; ?>">
                <label>Alamat:</label>
                <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>">
            <?php elseif ($type == 'artikel'): ?>
                <label>Judul:</label>
                <input type="text" name="judul" value="<?php echo $data['judul']; ?>">
                <label>Konten:</label>
                <textarea name="konten"><?php echo $data['konten']; ?></textarea>
            <?php elseif ($type == 'portofolio'): ?>
                <label>Judul:</label>
                <input type="text" name="judul" value="<?php echo $data['judul']; ?>">
                <label>Deskripsi:</label>
                <textarea name="deskripsi"><?php echo $data['deskripsi']; ?></textarea>
            <?php endif; ?>
            <button type="submit" name="update">Update</button>
        </form>
        <a href="index.php">Back to Profile</a>
    </div>
</body>
</html>
