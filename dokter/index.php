<?php 
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: ../login.php?pesan=gagal');
}
include 'layout/header.php';
include 'layout/nav.php';
include 'layout/sidebar.php';
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
                        <div class="alert alert-primary border-0 mb-4 mt-5 px-md-5">
                            <div class="position-relative">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col position-relative">
                                        <h2 class="text-primary">Welcome back, your dashboard is ready!</h2>
                                        <p class="text-gray-700">Halaman Ini Dikhususkan Untuk Dokter Yang Ingin Mengkonfirmasi Pasien YAng telah Di Daftarkan Untuk Diperiksa</p>
                                    </div>
                                    <div class="col d-none d-md-block text-right pt-3"><img class="img-fluid mt-n5" src="assets/img/drawkit/color/drawkit-content-man-alt.svg" style="max-width: 25rem;" /></div>
                                </div>
                            </div>
                        </div>
                </main>
             <?php 
             include 'layout/footer.php';
              ?>