
<?php 

session_start();
if (!isset($_SESSION['login'])) {
  header('Location: ../login.php?pesan=gagal');
}
include 'layout/header.php';
include 'layout/sidebar.php';
include 'layout/topbar.php';
include '../koneksi/koneksi.php';
$id = (int)$_GET['id'];
$sql12 = "SELECT * FROM pasien WHERE id = '$id'";
$result = $conn->query($sql12);
if (isset($_POST['submit'])) {
  $nama = htmlspecialchars($_POST['nama']);
  $email = $_POST['email'];
  $akses = $_POST['akses'];
  $kode = $_POST['kode'];
  $Penyakit = htmlspecialchars($_POST['p_derita']);
  $kelamin = $_POST['kelamin'];
  $alamat = htmlspecialchars($_POST['alamat']);
  $tlp = $_POST['notlp'];
  $bulan = $_POST['bulan'];
  $tahun = $_POST['tahun'];
  $konfirmasi = $_POST['konfirmasi'];
  $tensi = $_POST['tensi_darah'];
  $berat = $_POST['berat'];
  $sql = "UPDATE  pasien SET nama =  '$nama', email = '$email', akses = '$akses', kode = '$kode', derita = '$Penyakit', kelamin =  '$kelamin', alamat = '$alamat', no_tlp = '$tlp', bulan = '$bulan', tahun = '$tahun', konfirmasi  = '$konfirmasi', tensi_darah = '$tensi', berat_badan = '$berat' WHERE id = '$id'";
  $myquery = $conn->query($sql);
  if ($myquery === TRUE) {
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
    <li class="breadcrumb-item active" aria-current="page">Input Pasien</li>
  </ol>
</nav>
  <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Halaman Input Pasien</h6>
                </div>
                <div class="card-body">
                  <?php while ($d = mysqli_fetch_array($result)) : ?>
                  <form method="post">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                <input type="text" class="form-control"  width="20%" style="border-radius: 20px;" name="nama" value="<?= $d['nama'] ?>">
              </div>

                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                <input type="email" class="form-control" width="20%"  style="border-radius: 20px;" name="email" value="<?= $d['email'] ?>">
              </div>
              
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                                    <label>Hak Akses</label>
                <input type="text" class="form-control"  width="20%" value="pasien" style="border-radius: 20px;" readonly="" name="akses">
              </div>
              
                        </div>  
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kode Member</label>
                            <input type="text" class="form-control"  width="20%" value="<?= $d['kode']; ?>" style="border-radius: 20px;" readonly='' name="kode">
                          </div>
                          
                            </div>  
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                              <label>Penyakit Yang Diderita</label>
                              
                <input type="text" class="form-control" placeholder="Penyakit Yang Diderita" width="20%" style="border-radius: 20px;" name="p_derita" value="<?= $d['derita'] ?>">
                        </div>
                          <div class="col-md-6">
                              <label>Jenis Kelamin</label>
                            <select class="form-control" style="border-radius: 20px;" name="kelamin">
                              <option value="Laki-laki">Laki-laki</option>
                              <option value="perempuan">perempuan</option>
                            </select>
                        </div>
                      </div>
                      <br>
                        <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                        <input type="number"  placeholder="Masukan Tensi Darah" class="form-control"  width="20%"  style="border-radius: 20px;" name="tensi_darah" value="<?= $d['tensi_darah'] ?>"  >
                      </div>
                                </div>
                                 <div class="col-md-6">
                                  <div class="form-group">
                        <input type="number" class="form-control" placeholder="Masukan Berat Badan" width="20%"  style="border-radius: 20px;"  name="berat" value="<?= $d['berat_badan'] ?>">
                      </div>
                                </div>
                              </div>

                        <div class="row">
                        <div class="col-md-6 mt-2">
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
                          <div class="col-md-6 mt-2">
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


                            <div class="form-group mt-2">
                          <label for="exampleFormControlTextarea1">Alamt Rumah</label>
                          <div class="form-group mt-3">
                            <input type="text" class="form-control"  width="20%"  style="border-radius: 20px;" name="alamat" value="<?= $d['alamat'] ?>">
                        </div>
                            <div class="form-group mt-3">
                            <input type="number" class="form-control"  width="20%" placeholder="Masukan Nomer Telpon" style="border-radius: 20px;" name="notlp" value="<?= $d['no_tlp'] ?>">
                          </div>
                          <label class="text-danger">Konfirmasi Pasien</label>
                           <div class="form-check">
          <input class="form-check-input" type="radio" name="konfirmasi"  value="Sudah" checked>
          <label class="form-check-label" for="exampleRadios1">
            Sudah
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="konfirmasi"  value="Belum">
          <label class="form-check-label" >
           Belum
          </label>
        </div>
        <br>

                      <button class="btn btn-primary" name="submit" type="submit"><i class="fas fa-plus text-white "></i> Tambahkan</button>
                     

                  </form>
                <?php endwhile ?>
                </div>
              </div>
</div>

    <?php 
    include 'layout/footer.php';
     ?>