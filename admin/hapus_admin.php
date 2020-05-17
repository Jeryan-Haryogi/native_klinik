<?php 
session_start();
 if (!isset($_SESSION['login'])) {
  header('Location: ../login.php');
}nclude 'tracking.php';
include '../koneksi/koneksi.php';
$id = $_GET['id'];
$query = "DELETE  FROM user WHERE id = '$id'";
$myquery  = $conn->query($query);
if ($myquery === TRUE) {

header('Location: data_admin.php?pesan=success');
}

 ?>