<?php include 'tracking.php';
session_start();
 if (!isset($_SESSION['login'])) {
  header('Location: ../login.php');
}
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>DevExtreme Demo</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>window.jQuery || document.write(decodeURIComponent('%3Cscript src="js/jquery.min.js"%3E%3C/script%3E'))</script>
    <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/20.1.3/css/dx.common.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/20.1.3/css/dx.light.css" />
    <script src="https://cdn3.devexpress.com/jslib/20.1.3/js/dx.all.js"></script>
    <script src="data.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <script src="index.js"></script>
</head>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>

  <!-- Custom fonts for this template-->
   <link rel="stylesheet" type="text/css" href="../admin/style.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/20.1.3/css/dx.common.css" />
  <link href='https://fonts.googleapis.com/css?family=Romanesco' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,100,100italic,300,300italic,500italic,700,700italic,900,900italic,400italic' rel='stylesheet' type='text/css'>
  <link href="calender/css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="calender/css/clndr.css" type="text/css" />
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
  <link href="../admin/thamplate/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../admin/thamplate/css/sb-admin-2.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>window.jQuery || document.write(decodeURIComponent('%3Cscript src="js/jquery.min.js"%3E%3C/script%3E'))</script>

     <script src="https://cdn3.devexpress.com/jslib/20.1.3/js/dx.all.js"></script>

</head>

<body id="page-top">
<?php include 'layout/header.php'; ?>
<?php include 'layout/sidebar.php'; ?>


     <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-body">
                <div class="dx-viewport">
    <div class="demo-container">
        <div class="scheduler"></div>
    </div>
    <div class="demo-container mt-3">
        <div class="scheduler"></div>
    </div>
    </div>
  
                  </div>
                </div>
              </div>

  <script src="thamplate/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="thamplate/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="thamplate/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
 
</body>
</html>