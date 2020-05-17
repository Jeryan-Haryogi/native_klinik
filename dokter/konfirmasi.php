<?php 
session_start();
if (!isset($_SESSION['login'])) {
  header('Location: ../login.php?pesan=gagal');
}
include 'layout/header.php';
include 'layout/nav.php';
include 'layout/sidebar.php';
include '../koneksi/koneksi.php';
$id = (int)$_GET['id'];
$mysquery = $conn->query("SELECT * FROM pasien WHERE id = '$id' ");
if (isset($_POST['submit'])) {
  $konfirmasi = $_POST['konfirmasi'];
  $tensi = $_POST['tensi_darah'];
  $berat = $_POST['berat'];

  $sql = "UPDATE pasien SET konfirmasi = '$konfirmasi', berat_badan = '$berat', tensi_darah = '$tensi' WHERE id = '$id'";
  $query = $conn->query($sql);
  if ($query == TRUE) {
    echo "<script>

    setTimeout(function(){
      Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Data Berhasil Di Konfirmasi',
  showConfirmButton: false,
  timer: 1500
})   
      }, 300);
    </script>
    ";
  }
}
?>
   <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid mt-5">
                        <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
                            <div class="mr-4 mb-3 mb-sm-0">
                                <h1 class="mb-0">Konfirmasi Pasien</h1>
                                <div class="small"><span class="font-weight-500 text-primary">Friday</span> &#xB7; September 20, 2020 &#xB7; 12:16 PM</div>
                            </div>
                        </div>
                            
                            <div class="col-lg-12 col-xl-12 ">
                                <div class="card mb-4">
                                  
                                <div class="card">
                                    <div class="card-header">Konfirmasi Pasien</div>
                                    <div class="card-body">
                                      <?php while ($d = mysqli_fetch_array($mysquery)) :?>
                                    	<form action="" method="post"> 
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
                          <label class="text-danger">Konfirmasi Pasien</label>
                           <div class="form-check" >
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

          <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" style="border-radius: 20px;"><i class="fas fa-plus"></i> Tambahkan</button>
        </form>
        <?php endwhile ?>
        <?php if (isset($query)): ?>
          <br>
        <a href="periksa_pasien.php" class="btn btn-info">Kembali</a>
        <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
    
    <?php include 'layout/footer.php'; ?>