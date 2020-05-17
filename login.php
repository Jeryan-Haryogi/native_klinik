<?php 

include 'koneksi/koneksi.php';
session_start();

if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$password = $_POST['Password'];
		$sql1 = "SELECT * FROM user WHERE nama = '$nama' AND password = '$password'";
		$Query1 = mysqli_query($conn, $sql1);
		$cek = mysqli_num_rows($Query1);
		$sql2 = "SELECT * FROM petugas WHERE nama = '$nama' AND password = '$password'";
		$Query2 = $conn->query($sql2);
		$cek2 = mysqli_num_rows($Query2);
		$sql3 = "SELECT * FROM dokter WHERE nama = '$nama' AND password = '$password'";
		$Query3 = $conn->query($sql3);
		$cek3 = mysqli_num_rows($Query3);
		if ($cek === 1) {
			$hash = md5('true');
			if (isset($_POST['cookie'])) {
				setcookie('login', $hash, time() + 60);
			}
			 $_SESSION['login'] = TRUE;
			header('Location: admin/index.php');
		}else if ($cek2 === 1) {
			$hash = md5('true');
			if (isset($_POST['cookie'])) {
				setcookie('login', $hash, time() + 60);
			}
			 $_SESSION['login'] = TRUE;
			header('Location: petugas/index.php');
		}else if ($cek3 == 1) {
			$hash = md5('true');
			if (isset($_POST['cookie'])) {
				setcookie('login', $hash, time() + 60);
			}
			 $_SESSION['login'] = TRUE;
			header('Location: dokter/index.php');
		}
		else {
			echo "<script>
	setTimeout(function(){
		Swal.fire({
		  icon: 'error',
		  title: 'Username Dan Password Tidak Terdaftar',
		  })
			}, 300);
			</script>";
		}

}
if (isset($_GET['pesan'])) {
if ($_GET['pesan'] == 'gagal') {
	echo "<script>
	setTimeout(function(){
		Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Anda Haru Login Terlebih Dahulu',
  })
	}, 300);
	</script>";
}else if ($_GET['pesan'] == 'keluar') {
	echo "<script>
	setTimeout(function(){
		Swal.fire({
  icon: 'success',
  title: 'Berhasil Logout',
  })
	}, 300);
	</script>";
}
}
 ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../assets/node_modules/izitoast/dist/css/iziToast.min.css">

    <title>Halaman Login</title>
  </head>
  <body>
  	<div class="container  ">
  		<div class="row">
  			<div class="col-md-12 mt-5">
  				<div class="card" style="box-shadow: 5px 5px 5px 5px #eeee; border: none;">
	  <div class="card-body">
	  	<div class="row">
	  		<div class="col-md-6">
	  			<img src="assets/img/aplikasi.png" width="100%">
	  		</div>
	  		<div class="col-md-6 mt-5">
	  			<h4 class="ml-2">Halaman Login</h4>
	  			<form action="" method="post">
	  				  <div class="form-group">
			    <input type="text" class="form-control"  placeholder="Masukan Username " style="border: none; box-shadow: 5px 5px 5px 5px #eeee; " autofocus="" name="nama">
			  </div>
			    <div class="form-group">
			    <input type="password" class="form-control"  placeholder="Masukan Password " style="border: none; box-shadow: 5px 5px 5px 5px #eeee; " autofocus="" name="Password">
			  </div>
			  <div class="form-group form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1" style="box-shadow: 2px 2px 2px 2px #eeee;" name="cookie">
			    <label class="form-check-label" for="exampleCheck1">Check me out</label>
			  </div>
			  <button class="btn btn-primary" type="submit" name="submit">Masuk</button>
	  			</form>
	  		</div>
	  	</div>
	  </div>
	</div>
  			</div>
  		</div>
  	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
   <script type="text/javascript" src="../assets/node_modules/izitoast/dist/js/iziToast.min.js"></script>

    <script type="text/javascript" src="assets/js/sweetalert.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>