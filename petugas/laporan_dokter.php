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
  $sql = "SELECT * FROM dokter WHERE bulan = '$bulan' AND tahun = '$tahun'";
  $result = $conn->query($sql);
}
?>
  <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                 <div class="card" style="background-image: url('https://d26bwjyd9l0e3m.cloudfront.net/wp-content/uploads/2019/01/Law-Tech-Featured.jpg');">
                  <div class="card-body">
                    <div class="form-group">
                      <h1 class="text-center mt-5">Laporan Dokter</h1>
                      <div class="row gutters-sm">
                      </div>
                    </div>
                  </div>
                </div>
               
                      
               
                <div class="card">
                  <div class="card-header">
                    <h4>Laporan Dokter</h4>
                  </div>
                  <div class="card-body">
                    <form  method="post">
                   <div class="row">
                     <div class="col-md-4">
                       <div class="form-group">
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
                     </div>
                     <div class="col-md-4">
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
                     <div class="col-md-4">
                       <button class="btn btn-primary btn-lg btn-block mt-4" type="submit" name="cari" style="border-radius: 20px;">Cari</button>
                     </div>
                     </form>
                   </div>
                    <?php if (isset($result)): ?>
            
                      <table class="table mt-3 table-striped" id="tableCompany">
  <thead class="">
    <tr>
     <th scope="col">No</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Email</th>
      <th scope="col">Akses</th>
      <th scope="col">Kode Dokter</th>
       <th scope="col">Spesialis</th>
       <th scope="col">No Telpon</th>

       <th scope="col">Bulan Dan Tahun</th>
    </tr>
  </thead>
  <tbody>
    <?php  $no = 1 ; while ($d = mysqli_fetch_array($result)) :?>
    <tr>
       <th scope="row"><?= $no++ ?></th>
      <td><?= $d['nama'] ?></td>
      <td><?= $d['email'] ?></td>

      <td><?= $d['akses'] ?></td>
      <td><?= $d['kode_dokter'] ?></td>

      <td><?= $d['spesialis'] ?></td>

      <td><?= $d['no_tlp'] ?></td>
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

      <footer class="main-footer">
        <div class="footer-left">
          <a href="templateshub.net">Templateshub</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

 <script src="assets/js/app.min.js"></script>
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

       
  <!-- General JS Scripts -->
 
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
<script type="text/javascript">
    function downloadpdf()
    {
      console.log('ok');
    }
</script>
</body>


<!-- forms-advanced-form.html  21 Nov 2019 03:55:08 GMT -->
</html>

