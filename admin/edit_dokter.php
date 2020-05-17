<?php 
session_start();
if (!isset($_SESSION['login'])) {
	header('Location: ../login.php?pesan=gagal');
}
include 'tracking.php';
include 'layout/header.php';
include 'layout/sidebar.php';
include 'layout/topbar.php';
include '../koneksi/koneksi.php';
$id = (int)$_GET['id'];
$sql = "SELECT * FROM dokter WHERE id = '$id'";
$query = $conn->query($sql);
if (isset($_POST['submit'])) {
	$nama = htmlspecialchars($_POST['nama']);
  $email = $_POST['email'];
  $akses = $_POST['akses'];
  $kode = $_POST['kode'];
  $spesialis = $_POST['spesialis'];
  $no_tel = $_POST['notlp'];
  $password = $_POST['password'];
  $bulan = $_POST['bulan'];
  $tahun = $_POST['tahun'];

	$sql = "UPDATE dokter SET nama = '$nama', email = '$email', akses = '$akses', kode_dokter = '$kode',spesialis = '$spesialis', no_tlp = '$no_tel', password = '$password', bulan = '$bulan', tahun = '$tahun' WHERE id = '$id'";
	$result = $conn->query($sql);
	if ($result == TRUE) {
		  echo "<script>setTimeout(function(){
            Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'Data Berhasil Di Ubah',
          showConfirmButton: false,
          timer: 1500
        })   
        }, 300)</script>";
	}
	else {
		  echo "<script>setTimeout(function(){
            Swal.fire({
          position: 'top-end',
          icon: 'error',
          title: 'Data Gagal Di Ubah',
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
    <li class="breadcrumb-item active" aria-current="page">Edit Dokter</li>
  </ol>
</nav>
  <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Halaman Edit</h6>
                </div>
                <div class="card-body">
                	<?php while ($d = mysqli_fetch_array($query)) :?>
                	<form method="post">
                		  <div class="row">
                		  	<div class="col-md-6">
                		  		<div class="form-group">
						    <input type="text" class="form-control" value="<?= $d['nama'] ?>" width="20%" style="border-radius: 20px;" name="nama">
						  </div>

                		  	</div>
                		  	<div class="col-md-6">
                		  		<div class="form-group">
						    <input type="email" class="form-control"  width="20%"  style="border-radius: 20px;" name="email" value="<?= $d['email'] ?>">
						  </div>
						  
                		  	</div>
                		  	<div class="col-md-6">
                		  		<div class="form-group">
                                    <label>Hak Akses</label>
						    <input type="text" class="form-control"  width="20%" value="dokter" style="border-radius: 20px;" readonly="" name="akses">
						  </div>
						  
                		  	</div>	
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kode Dokter</label>
                            <input type="text" class="form-control"  width="20%" value="<?= $d['kode_dokter']; ?>" style="border-radius: 20px;"  readonly=''  name="kode" >
                          </div>
                          
                            </div>  
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


                          <label>Spesialis Penyakit</label>
                            <select class="form-control" name="spesialis" style="border-radius: 20px;">
                              <option value="Penyakit Dalam">Penyakit Dalam</option>
                              <option value="Anak">Anak</option>
                              <option value="Kesehatan Gigi Dan Mulut">Kesehatan Gigi Dan Mulut</option>
                              <option value="THT">THT</option>
                              <option value="Mata">Mata</option>
                              <option value="Kulit Dan Kelamin">Kulit Dan Kelamin</option>
                              <option value="Kandungan">Kandungan</option>
                              <option value="Tulang">Tulang</option>
                              <option value="Psikiater">Psikiater</option>
                            </select>
                            <div class="form-group mt-3">
                            <input type="number" class="form-control"  width="20%" placeholder="Masukan Nomer Telpon" style="border-radius: 20px;" name="notlp" value="<?= $d['no_tlp'] ?>">
                          </div>

                		  		<div class="form-group mt-3">
						    <input type="Password" class="form-control"  width="20%" placeholder="Masukan Password" style="border-radius: 20px;" name="password" value="<?= $d['password'] ?>">
						    <small class="text-danger ml-2">Password Yang Dimasukan Minimal 5 huruf</small>
						  </div>

                		  <button class="btn btn-primary" type="submit" name="submit"><i class="fas fa-plus text-white "></i> Tambahkan</button>
                		 

                	</form>
                <?php endwhile ?>
                </div>
              </div>
</div>

    <?php 
    include 'layout/footer.php';
     ?>