<?php
$host = "127.0.0.1";
$username = "root";
$pass = "";
$db = "kpri_wiyata";

$con = mysqli_connect($host, $username, $pass, $db);

if($con) {
 ?>

 <?php
 ;}
 else {
   ?>
   <script type="text/javascript">
   window.open('../v/503.html', '_SELF');
   </script>
   <?php
   ;
 }
 
 $cekdatabase = mysqli_select_db($con , $db) ;
 if($cekdatabase) {
  ?>
  
  <?php
  ;}
  else {
    ?>

    <script type="text/javascript">
    window.open('../v/503.html', '_SELF');
    </script>
    <?php
    ;
  } 

  ?> 
