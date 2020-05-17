
<?php 
session_start();
if (!isset($_SESSION['login'])) {
  header('Location: ../login.php?pesan=gagal');
}
include 'tracking.php';
include 'layout/header.php';
include 'layout/sidebar.php';
include 'layout/topbar.php';
include '../koneksi/koneksi.php';
$query=mysqli_query($conn,"Select Count(*) From user");
$hasil = mysqli_fetch_array($query);
$query2=mysqli_query($conn,"Select Count(*) From dokter");
$hasi2 = mysqli_fetch_array($query2);
$query3=mysqli_query($conn,"Select Count(*) From petugas");
$hasi3 = mysqli_fetch_array($query3);
 ?>
  
 

  <!-- Page Wrapper -->
 
          <!-- Topbar Navbar -->
         
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
           
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Admin</div>
                      <?php foreach ($hasil as $key => $value): ?>
                        
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $value; ?></div>
                      <?php break; ?>
                      <?php endforeach ?>
                    </div>

                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Dokter</div>
                      <?php foreach ($hasi2 as $key => $value2): ?>
                        
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $value2 ?></div>
                      <?php break; ?>
                      <?php endforeach ?>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Dokter</div>
                      <?php foreach ($hasi3 as $key => $value2): ?>
                        
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $value2 ?></div>
                      <?php break; ?>
                      <?php endforeach ?>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
          
           
          <!-- Content Row -->
         

              <!-- Approach -->
       <!--        <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                </div>
                <div class="card-body">
                  <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce CSS bloat and poor page performance. Custom CSS classes are used to create custom components and custom utility classes.</p>
                  <p class="mb-0">Before working with this theme, you should become familiar with the Bootstrap framework, especially the utility classes.</p>
                </div>
              </div> -->

              <div class="row">
                <div class="col-md-6">
                   <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                  </div>
                  <p>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a constantly updated collection of beautiful svg images that you can use completely free and without attribution!</p>
                  <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on unDraw &rarr;</a>
                </div>
                <div > 
                       <div class="card shadow mb-4" style="">
                <div class="card-header py-3 ">
                  <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                  </div>
                  <p>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a constantly updated collection of beautiful svg images that you can use completely free and without attribution!</p>
                  <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on unDraw &rarr;</a>
                </div>
              </div>
              </div>
            </div>

                </div>
                <div class="col-md-6">
                    <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4  mb-4" style="" src="img/undraw_posting_photo.svg" alt="">
                  </div>
                  <div class="calnder">
      <div class="column_right_grid calender">
        <div class="clndr-event">
        <!-- pop-up-box -->
        <script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
        <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
        <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
        <!-- //pop-up-box -->
        <div id="small-dialog" class="mfp-hide">
          <div class="event-text">
     <!--        <form>            
              <input type="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}"/>
              <input type="date" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}"/>
              <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message..</textarea>
              <input type="submit" value="Add" >
            </form> -->
          </div>
        </div>
        <script>
          $(document).ready(function() {
          $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
          });
                                          
          });
        </script> 
        <div class="cal1" style="margin-top: -100px;">
          <div class="clndr">
            <div class="clndr-controls">
              <div class="clndr-control-button">
                <p class="clndr-previous-button">previous</p>
              </div>
              <div class="month">SEPTEMBER 2015</div>
              <div class="clndr-control-button rightalign">
                <p class="clndr-next-button">next</p>
              </div>
            </div>
            <table class="clndr-table">
              <thead>
                <tr class="header-days">
                  <td class="header-day">SUN</td>
                  <td class="header-day">MON</td>
                  <td class="header-day">TUE</td>
                  <td class="header-day">WED</td>
                  <td class="header-day">THU</td>
                  <td class="header-day">FRI</td>
                  <td class="header-day">SAT</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="day past adjacent-month last-month calendar-day-2015-04-26"><div class="day-contents">26</div></td>
                  <td class="day past adjacent-month last-month calendar-day-2015-04-27"><div class="day-contents">27</div></td>
                  <td class="day past adjacent-month last-month calendar-day-2015-04-28"><div class="day-contents">28</div></td>
                  <td class="day past adjacent-month last-month calendar-day-2015-04-29"><div class="day-contents">29</div></td>
                  <td class="day past adjacent-month last-month calendar-day-2015-04-30"><div class="day-contents">30</div></td>
                  <td class="day past calendar-day-2015-05-01"><div class="day-contents">1</div></td>
                  <td class="day past calendar-day-2015-05-02"><div class="day-contents">2</div></td>
                </tr>
                <tr>
                  <td class="day past calendar-day-2015-05-03"><div class="day-contents">3</div></td>
                  <td class="day past calendar-day-2015-05-04"><div class="day-contents">4</div></td>
                  <td class="day past calendar-day-2015-05-05"><div class="day-contents">5</div></td>
                  <td class="day past calendar-day-2015-05-06"><div class="day-contents">6</div></td>
                  <td class="day past calendar-day-2015-05-07"><div class="day-contents">7</div></td>
                  <td class="day past calendar-day-2015-05-08"><div class="day-contents">8</div></td>
                  <td class="day past calendar-day-2015-05-09"><div class="day-contents">9</div></td>
                </tr>
                <tr>
                  <td class="day past event calendar-day-2015-05-10"><div class="day-contents">10</div></td>
                  <td class="day past event calendar-day-2015-05-11"><div class="day-contents">11</div></td>
                  <td class="day past event calendar-day-2015-05-12"><div class="day-contents">12</div></td>
                  <td class="day past event calendar-day-2015-05-13"><div class="day-contents">13</div></td>
                  <td class="day today event calendar-day-2015-05-14"><div class="day-contents">14</div></td>
                  <td class="day calendar-day-2015-05-15"><div class="day-contents">15</div></td>
                  <td class="day calendar-day-2015-05-16"><div class="day-contents">16</div></td>
                </tr>
                <tr>
                  <td class="day calendar-day-2015-05-17"><div class="day-contents">17</div></td>
                  <td class="day calendar-day-2015-05-18"><div class="day-contents">18</div></td>
                  <td class="day calendar-day-2015-05-19"><div class="day-contents">19</div></td>
                  <td class="day calendar-day-2015-05-20"><div class="day-contents">20</div></td>
                  <td class="day event calendar-day-2015-05-21"><div class="day-contents">21</div></td>
                  <td class="day event calendar-day-2015-05-22"><div class="day-contents">22</div></td>
                  <td class="day event calendar-day-2015-05-23"><div class="day-contents">23</div></td>
                </tr>
                <tr>
                  <td class="day calendar-day-2015-05-24"><div class="day-contents">24</div></td>
                  <td class="day calendar-day-2015-05-25"><div class="day-contents">25</div></td>
                  <td class="day calendar-day-2015-05-26"><div class="day-contents">26</div></td>
                  <td class="day calendar-day-2015-05-27"><div class="day-contents">27</div></td>
                  <td class="day calendar-day-2015-05-28"><div class="day-contents">28</div></td>
                  <td class="day calendar-day-2015-05-29"><div class="day-contents">29</div></td>
                  <td class="day calendar-day-2015-05-30"><div class="day-contents">30</div></td>
                </tr>
                <tr>
                  <td class="day calendar-day-2015-05-31"><div class="day-contents">31</div></td>
                  <td class="day adjacent-month next-month calendar-day-2015-06-01"><div class="day-contents">1</div></td>
                  <td class="day adjacent-month next-month calendar-day-2015-06-02"><div class="day-contents">2</div></td>
                  <td class="day adjacent-month next-month calendar-day-2015-06-03"><div class="day-contents">3</div></td>
                  <td class="day adjacent-month next-month calendar-day-2015-06-04"><div class="day-contents">4</div></td>
                  <td class="day adjacent-month next-month calendar-day-2015-06-05"><div class="day-contents">5</div></td>
                  <td class="day adjacent-month next-month calendar-day-2015-06-06"><div class="day-contents">6</div></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

                </div>
              </div>
                </div>
              </div>  
               <div class="row">

            <!-- Content Column -->

           


            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

  
      <!-- End of Main Content -->

    <?php 
    include 'layout/footer.php';
     ?>
<script src="calender/js/underscore-min.js"></script>
<script src= "calender/js/moment-2.2.1.js"></script>
<script src="calender/js/clndr.js"></script>
<script src="calender/js/site.js"></script>
<script type="text/javascript">
  
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-35751449-15', 'auto');ga('send', 'pageview');
</script>