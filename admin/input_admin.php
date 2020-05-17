
<?php 
session_start();
 if (!isset($_SESSION['login'])) {
  header('Location: ../login.php');
}
include 'tracking.php';
include 'layout/header.php';
include 'layout/sidebar.php';
include 'layout/topbar.php';
include '../koneksi/koneksi.php';
if (isset($_POST['submit'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $created = date('Y-M-d');
    $bulan = $_POST['bulan'];
    $tahun =$_POST['tahun'];
    $akses = $_POST['akses'];
    $sql = "INSERT INTO user VALUES('', '$nama', '$email', '$password', '$created', '$bulan','$tahun','$akses')";
    $myquery = mysqli_query($conn, $sql);
    if ($myquery === TRUE) {
        echo "<script>setTimeout(function(){
            Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Data Berhasil Ditambah',
  showConfirmButton: false,
  timer: 1500
})   
        }, 300)</script>";
    }else {
         echo "<script>setTimeout(function(){
            Swal.fire({
              position: 'top-end',
              icon: 'error',
              title: 'Data Yang Anda Masukan Salah',
              showConfirmButton: false,
              timer: 1500
            })   
                    }, 300)</script>";
    }
}
 ?>
  
 <div class="container-fluid">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Input Admin</li>
  </ol>
</nav>
  <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Halaman Input Admin</h6>
                </div>
                <div class="card-body">
                	<form method="post">
                		  <div class="row">
                		  	<div class="col-md-6">
                		  		<div class="form-group">
                            <label>Masukan Nama Lengkap</label>
						    <input type="text" class="form-control" placeholder="Masukan Nama Lengkap" width="20%" style="border-radius: 20px;" name="nama">
						  </div>

                		  	</div>
                		  	<div class="col-md-6">
                		  		<div class="form-group">
                            <label>Masukan Email</label>
						    <input type="email" class="form-control" placeholder="Masukan Email " width="20%"  style="border-radius: 20px;" name="email">
						  </div>
                                   <div class="row">
                        <div class="col-md-6 ">
                              <label>Pilih Bulan</label>
                               <select class="form-control" style="border-radius: 20px;" name="bulan">
                              <option value="Januari">Januari</option>
                              <option value="Febuari">Febuari</option>
                              <option value="Maret">Maret</option>
                              <option value="April">April</option>
                              <option value="Mei">Mei</option>
                              <option value="Juni">Juni</option>
                              <option value="Juli">Juli</option>
                              <option value="Agustus">Agustus</option>
                              <option value="September">September</option>
                              <option value="Oktober">Oktober</option>
                              <option value="November">November</option>
                              <option value="Desember">Desember</option>
                            </select>
                        </div>
                          <div class="col-md-6">
                              <label>Pilih Tahun</label>
                            <select class="form-control" style="border-radius: 20px;" name="tahun">
                         <option value="2020">2020</option>
                              <option value="2021">2021</option>
                              <option value="2022">2022</option>
                              <option value="2023">2023</option>
                              <option value="2024">2024</option>
                              <option value="2025">2025</option>
                              <option value="2026">2026</option>
                              <option value="2027">2027</option>
                              <option value="2028">2028</option>
                              <option value="2029">2029</option>
                              <option value="2030">2030</option>
                            </select>
                        </div>
                      </div>


                		  	</div>
                		  	<div class="col-md-6">
                		  		<div class="form-group">
						    <input type="text" class="form-control"  width="20%" value="admin" style="border-radius: 20px;" readonly="" name="akses">
						  </div>
						  
                		  	</div>	
                		  </div>
                		  <div class="row">
                		  	<div class="col-md-12">
                		  		<div class="form-group">
						    <input type="Password" class="form-control"  width="20%" placeholder="Masukan Password" style="border-radius: 20px;" name="password">
						    <small class="text-danger ml-2">Password Yang Dimasukan Minimal 5 huruf</small>
						  </div>
                		  	</div>
                		  </div>
                		  <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-plus text-white " ></i> Tambahkan</button>
                		 

                	</form>
                </div>
              </div>
</div>

    <?php 

    include 'layout/footer.php';
     ?>