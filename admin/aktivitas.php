<?php 
include 'tracking.php';
include 'layout/header.php';
include 'layout/sidebar.php';
include 'layout/topbar.php';
include 'tracking.php';
include 'layout/header.php';

$file = $file = fopen("logativ/aktivitas.txt","r") or die("Error");
echo "<br>";
echo "<div class='container-fluid'>";
echo "<h2><b>Advance Aktivitas User</b></h2>";
echo "<ul  class='list-group' style='overflow:scroll;  width: 100%;
   height: 500px;'>";
while (($row = fgets($file)) != false) {
$col = explode(',',$row);
foreach($col as $data) {

echo "<li class='list-group-item'>". trim($data)."</li>";

}
}
echo "</ul>";
echo "</div>";
 include 'layout/footer.php';
 ?>