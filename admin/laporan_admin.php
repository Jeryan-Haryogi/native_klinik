
 <?php 
 
session_start();
if (!isset($_SESSION['login'])) {
  header('Location: ../login.php?pesan=gagal');
}
include 'layout/header.php';
include 'layout/sidebar.php';
include 'layout/topbar.php';
include '../koneksi/koneksi.php';

if (isset($_POST['cari'])) {
  $bulan = $_POST['bulan'];
  $tahun = $_POST['tahun'];
  $sql = "SELECT * FROM user WHERE bulan = '$bulan' AND tahun = '$tahun'";
  $query = $conn->query($sql);

}
?>
<style type="text/css">
  .dt-button {
    background-color: red;
    color: white;
  }
</style>


 <div class="col-lg-12 mb-4">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Input Admin</li>
  </ol>
</nav>

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                </div>
                <div class="card-body">
                  <form action="" method="post">
                  <div class="row">
                    <div class="col-md-4">
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
                    <div class="col-md-4">
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
                    <div class="col-md-3">
                      <button type="submit" name="cari" class="btn btn-primary btn-lg btn-block mb-2" style="border-radius: 20px;">Cari</button>
                    </div>
                    </form>
                  </div>
                  
                  <?php if (isset($query)) : ?>
                  <table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Email</th>
      <th scope="col">Tanggal Buat</th>
      <th scope="col">Bulan Dan Tahun</th>
    </tr>
  </thead>
  <tbody>
    <?php  $no = 1 ; while ($d = mysqli_fetch_array($query)) :?>
    <tr>
      <th scope="row"><?= $no++ ?></th>
      <td><?= $d['nama'] ?></td>
      <td><?= $d['email'] ?></td>
      <td><?= $d['created_add'] ?></td>
      <td><?= $d['bulan'] ?> <?= $d['tahun'] ?></td>
    </tr>
  <?php endwhile ?>

  </tbody>
</table>
<div id="editor" class="editor"></div>

<?php else: ?>
  <h1>Tidak Ada ada</h1>

<?php endif ?>
                 
                </div>
              </div>
              <
              <?php 

    include 'layout/footer.php';
     ?>