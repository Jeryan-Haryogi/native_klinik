
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
$mysquery = $conn->query('SELECT * FROM user');
if (isset($_GET['pesan'])) {
  if ($_GET['pesan'] == 'success') {
  echo "<script>
  setTimeout(function(){
    Swal.fire({
      icon: 'success',
      title: 'Data Berhasil Dihapus',
      })
      }, 300);
      </script>";
}
}

 ?>
  
 <div class="container-fluid">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data Admin</li>
  </ol>
</nav>
   <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Tanggal buat</th>
                      <th>Filter Bulan Tahun</th>
                      <th>Hak Akses</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($d = mysqli_fetch_array($mysquery)) :?>
                    <tr>
                      <td><?= $d['nama'] ?></td>
                      <td><?= $d['email'] ?></td>
                      <td><?= $d['created_add'] ?></td>
                      <td><?= $d['bulan'] ?> <?= $d['tahun'] ?></td>
                      <td><?= $d['hak_akses'] ?></td>
                      <td>
                        <a href="edit_admin.php?id=<?= $d['id'] ?>" class=" btn btn-primary">
                          <i class="fas fa-edit"></i></a>
                        <a href="hapus_admin.php?id=<?= $d['id'] ?>" class=" btn btn-danger" onclick="confirm('yakin Dihapus ?')">
                          <i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                  <?php endwhile ?>
                   
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