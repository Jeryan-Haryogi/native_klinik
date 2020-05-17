
<?php 

session_start();
if (!isset($_SESSION['login'])) {
  header('Location: ../login.php?pesan=gagal');
}
include 'layout/header.php';
include 'layout/sidebar.php';
include 'layout/topbar.php';
include '../koneksi/koneksi.php';
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
  $sql = "INSERT INTO pasien VALUES('', '$nama', 
    '$email', '$akses', '$kode', '$Penyakit', '$kelamin', '$alamat', '$tlp', '$bulan', '$tahun', '$konfirmasi', '$tensi', '$berat')";
  $myquery = $conn->query($sql);
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
function acak($panjang)
{
    $karakter= '123456789389472834729347293234293472323847293742323426234623482342863428364';
    $string = '';
    for ($i = 0; $i < $panjang; $i++) {
  $pos = rand(0, strlen($karakter)-1);
  $string .= $karakter{$pos};
    }
    return $string;
}
//cara memanggilnya
$hasil_1= acak(5);
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
                  <form method="post">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                <input type="text" class="form-control" placeholder="Masukan Nama Lengkap" width="20%" style="border-radius: 20px;" name="nama">
              </div>

                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                <input type="email" class="form-control" placeholder="Masukan Email " width="20%"  style="border-radius: 20px;" name="email">
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
                            <input type="text" class="form-control"  width="20%" value="<?= $hasil_1; ?>" style="border-radius: 20px;" readonly='' name="kode">
                          </div>
                          
                            </div>  
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                              <label>Penyakit Yang Diderita</label>
                              
                <input type="text" class="form-control" placeholder="Penyakit Yang Diderita" width="20%" style="border-radius: 20px;" name="p_derita">
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
                        <input type="number"  placeholder="Masukan Tensi Darah" class="form-control"  width="20%"  style="border-radius: 20px;" name="tensi_darah">
                      </div>
                                </div>
                                 <div class="col-md-6">
                                  <div class="form-group">
                        <input type="number" class="form-control" placeholder="Masukan Berat Badan" width="20%"  style="border-radius: 20px;"  name="berat">
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
                          <textarea class="form-control"  rows="3" name="alamat"></textarea>
                        </div>
                            <div class="form-group mt-3">
                            <input type="number" class="form-control"  width="20%" placeholder="Masukan Nomer Telpon" style="border-radius: 20px;" name="notlp">
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
                </div>
              </div>
</div>

    <?php 
    include 'layout/footer.php';
     ?>