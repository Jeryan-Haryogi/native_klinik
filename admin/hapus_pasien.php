<?php 
session_start();
 if (!isset($_SESSION['login'])) {
  header('Location: ../login.php');
}
include 'tracking.php';
include '../koneksi/koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM pasien WHERE id = '$id'";
$query = $conn->query($sql);
if ($query) {
	header('Location: data_pasien.php');
}
 ?>