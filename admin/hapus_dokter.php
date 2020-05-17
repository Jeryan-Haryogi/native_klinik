<?php 
session_start();
 if (!isset($_SESSION['login'])) {
  header('Location: ../login.php');
}
include 'tracking.php';
include '../koneksi/koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM dokter WHERE id = '$id'";
$myquery = $conn->query($sql);
if ($myquery) {
	header('Location: data_dokter.php');
}
 ?>