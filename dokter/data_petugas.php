<?php 
session_start();
if (!isset($_SESSION['login'])) {
  header('Location: ../login.php?pesan=gagal');
}
include 'layout/header.php';
include 'layout/nav.php';
include 'layout/sidebar.php';
include '../koneksi/koneksi.php';

$mysquery = $conn->query('SELECT * FROM petugas');
?>
   <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid mt-5">
                        <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
                            <div class="mr-4 mb-3 mb-sm-0">
                                <h1 class="mb-0">Dashboard</h1>
                                <div class="small"><span class="font-weight-500 text-primary">Friday</span> &#xB7; September 20, 2020 &#xB7; 12:16 PM</div>
                            </div>
                        </div>
                            
                            <div class="col-lg-12 col-xl-12 ">
                                <div class="card mb-4">
                                  
                                <div class="card">
                                    <div class="card-header">Sales reporting</div>
                                    <div class="card-body">
                                    	<div class="table-responsive">
                <table class="table mt-3 table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
					  <thead>
					    <tr>
					      <th scope="col">No</th>
					             <th scope="col">Nama Lengkap</th>
      <th scope="col">Email</th>
      <th scope="col">tanggal Lahir</th>
      <th scope="col">Akses</th>
       <th scope="col">Nomer Telpon</th>
       <th scope="col">Agama</th>
       <th scope="col">Bulan Dan Tahun</th>

					    </tr>
					  </thead>
					  <tbody>

					    <?php $no = 1; while ($d = mysqli_fetch_array($mysquery)) : ?>
					    <tr>
					    	<td><?= $no++ ?></td>
					    <td><?= $d['nama'] ?></td>
      <td><?= $d['email'] ?></td>
      <td><?= $d['tgl_lahir'] ?></td>
      <td><?= $d['akses'] ?></td>
       <td><?= $d['no_tlp'] ?></td>
       <td><?= $d['agama'] ?></td>
       <td><?= $d['bulan'] ?> <?= $d['tahun'] ?></td>
					  
					    </tr>
					  <?php endwhile; ?>
					  </tbody>
					</table>
  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

             <?php 
             include 'layout/footer.php';
              ?>
              