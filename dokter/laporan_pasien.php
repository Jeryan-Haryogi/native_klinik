<?php 
session_start();
if (!isset($_SESSION['login'])) {
  header('Location: ../login.php?pesan=gagal');
}
include 'layout/header.php';
include 'layout/nav.php';
include 'layout/sidebar.php';
include '../koneksi/koneksi.php';


if (isset($_POST['cari'])) {
  $bulan = $_POST['bulan'];
  $tahun = $_POST['tahun'];
  $sql = "SELECT * FROM pasien WHERE bulan = '$bulan' AND tahun = '$tahun'";
  $query = $conn->query($sql);

}
?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid mt-5">
                        <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
                            <div class="mr-4 mb-3 mb-sm-0">
                                <h1 class="mb-0">Laporan Pasien</h1>
                                <div class="small"><span class="font-weight-500 text-primary"><?= date('D') ?></span>
                                  <?= date('d-M-Y') ?></div>
                            </div>
                        </div>
                            
                            <div class="col-lg-12 col-xl-12 ">
                                <div class="card mb-4">
                                  
                                <div class="card">
                                    <div class="card-header">Sales reporting</div>
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
                  <div class="table-responsive">
                <table class="table mt-3 table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th scope="col">No</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Email</th>
      <th scope="col">Kode</th>
      <th>Derita</th>
      <th scope="col">Akses</th>
       <th scope="col">Nomer Telpon</th>
       <th scope="col">Alamat</th>
       <th scope="col">Bulan Dan Tahun</th>
       <th scope="col">Konfirmasi Pasien</th>
       <th scope="col">Tensi Darah</th>
       <th scope="col">Berat Badan</th>


              </tr>
            </thead>
            <tbody>

              <?php $no = 1; while ($d = mysqli_fetch_array($query)) : ?>
              <tr>
              <th scope="row"><?= $no++ ?></th>
      <td><?= $d['nama'] ?></td>
      <td><?= $d['email'] ?></td>
      <td><?= $d['kode'] ?></td>
       <td><?= $d['derita'] ?></td>
      <td><?= $d['akses'] ?></td>
       <td><?= $d['no_tlp'] ?></td>
       <td><?= $d['alamat'] ?></td>
       <td><?= $d['bulan'] ?> <?= $d['tahun'] ?></td>
       <td><?= $d['konfirmasi'] ?></td>
       <td><?= $d['tensi_darah'] ?></td>
       <td><?= $d['berat_badan'] ?> Kg</td>
     
            
              </tr>
            <?php endwhile; ?>
            </tbody>
          </table>
  </div>
<div id="editor" class="editor"></div>

<?php else: ?>
  <h1>Tidak Ada ada</h1>

<?php endif ?>
                 
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </main>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
 <script type="text/javascript">
        $(document).ready(function () {
        $('.table').DataTable({
            dom: 'Bfrtip',
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        });
    });
     </script>