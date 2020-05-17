
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

$mysquery = $conn->query('SELECT * FROM dokter');
 ?>
  
 <div class="container-fluid">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data Dokter</li>
  </ol>
</nav>
  <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Halaman Data  Dokter</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                <table class="table mt-3 table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Email</th>
      <th scope="col">Akses</th>
      <th scope="col">Kode Dokter</th>
       <th scope="col">Spesialis</th>
       <th scope="col">No Telpon</th>

       <th scope="col">Bulan Dan Tahun</th>
       <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>

    <?php $no = 1; while ($d = mysqli_fetch_array($mysquery)) : ?>
    <tr>
      <th scope="row"><?= $no++ ?></th>
      <td><?= $d['nama'] ?></td>
      <td><?= $d['email'] ?></td>

      <td><?= $d['akses'] ?></td>
      <td><?= $d['kode_dokter'] ?></td>

      <td><?= $d['spesialis'] ?></td>

      <td><?= $d['no_tlp'] ?></td>
      <td><?= $d['bulan'] ?> <?= $d['tahun'] ?></td>
      <td>
        <a href="edit_dokter.php?id=<?= $d['id'] ?>" class="btn btn-primary "><i class="fas fa-edit"></i></a>
        <a href="hapus_dokter.php?id=<?= $d['id'] ?>" onClick="confirm('Yakin Anda Hapus??')" class="btn btn-danger "><i class="fas fa-trash"></i></a>
      </td>
    </tr>
  <?php endwhile; ?>
  </tbody>
</table>
  </div>
   </div>
</div>
</div>

      </div>

    <?php 
    include 'layout/footer.php';
     ?>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('.table').DataTable();
} );
//   function klikThis()
//   {
//     Swal.fire({
//   title: 'Are you sure?',
//   text: "You won't be able to revert this!",
//   icon: 'warning',
//   showCancelButton: true,
//   confirmButtonColor: '#3085d6',
//   cancelButtonColor: '#d33',
//   confirmButtonText: 'Yes, delete it!'
// }).then((result) => {
//   window.location = 'goole'
// })
//   }
</script>