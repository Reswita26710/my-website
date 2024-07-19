<?php 
include 'includes/db.php'; 

$type = $_GET['type'];
$id = $_GET['id'];

if ($type == 'data_diri') {
    $conn->query("DELETE FROM data_diri WHERE id=$id");
} elseif ($type == 'artikel') {
    $conn->query("DELETE FROM artikel WHERE id=$id");
} elseif ($type == 'portofolio') {
    $conn->query("DELETE FROM portofolio WHERE id=$id");
}

header('Location: index.php');
