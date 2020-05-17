<?php 

session_start();
if (!isset($_SESSION['login'])) {
  header('Location: ../login.php?pesan=gagal');
}
include 'layout/header.php';
include 'layout/nav.php';
include 'layout/sidebar.php';
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
  $tensi = 0;
  $berat = 0;
  $sql = "INSERT INTO pasien VALUES('', '$nama', 
    '$email', '$akses', '$kode', '$Penyakit', '$kelamin', '$alamat', '$tlp', '$bulan', '$tahun', '$konfirmasi', '$tensi', '$berat')";
  $myquery = $conn->query($sql);
  if ($myquery === TRUE) {
    echo "<script>
     setTimeout(function(){
      iziToast.success({
    title: 'Berhasil',
    message: 'Data Berhasil Ditambahkan',
    position: 'topRight'
  });
  }, 500);
    </script>";
  }
  else {
     echo "<script>
     iziToast.error({
    title: 'Error',
    message: 'Data Tidak Berhasil Ditambahkan',
    position: 'topRight'
  });</script>";
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
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                 <div class="card" style="background-image: url('https://d26bwjyd9l0e3m.cloudfront.net/wp-content/uploads/2019/01/Law-Tech-Featured.jpg');">
                  <div class="card-body">
                    <div class="form-group">
                      <h1 class="text-center">Pendaftaran Pasien</h1>
                      <div class="row gutters-sm">
                      </div>
                    </div>
                  </div>
                </div>
               
                      
               
                <div class="card">
                  <div class="card-header">
                    <h4>Input Text</h4>
                  </div>
                  <div class="card-body">
                    <form action="" method="post"> 
                    <div class="row">
                     <div class="col-sm-6">
                          <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" class="form-control" placeholder="Masukan Nama Lengkap" style="border-radius: 20px;" required="" name="nama">
                    </div>
                     </div> 
                      <div class="col-sm-6">
                          <div class="form-group">
                      <label>Masukan Email</label>
                      <input type="email" class="form-control" placeholder="Masukan Email"  style="border-radius: 20px;" required="" name="email">
                    </div>
                     </div> 
                      <div class="col-sm-6">
                          <div class="form-group">
                      <label>Hak Akses</label>
                      <input type="email" class="form-control" placeholder="Masukan Email"  style="border-radius: 20px;"  value="pasien" required="" readonly="" name="akses">
                    </div>
                     </div> 
                      <div class="col-sm-6">
                          <div class="form-group">
                      <label>Kode Member</label>
                      <input type="text" class="form-control" placeholder="Masukan Email"  style="border-radius: 20px;" required="" value="<?= $hasil_1; ?>" readonly="" name="kode">
                    </div>
                     </div> 
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
                          <select class="form-control" style="border-radius: 20px; width: 20%;" name="konfirmasi">
                         <option value="Sudah">Sudah</option>
                              <option value="Belum">Belum</option>
                            </select>
                   <br>

          <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" style="border-radius: 20px;"><i class="fas fa-plus"></i> Tambahkan</button>
        </form>
                 </div>
               </div>
                  </div>
                </div>
               
          </div>
        </section>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php include 'layout/footer.php'; ?>
