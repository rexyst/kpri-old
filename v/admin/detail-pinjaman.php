<head>
<?php 
session_start();
include('atoms/kpri.atom.head.html'); 
?>
<link type="text/css" rel="stylesheet" href="../../assets/dist/page-css/admin/kpri-admin-special.css">
</head>
<body>

<div class=halaman_utama_1_250>

<div id="kolom_header" class="kolom_header">
</div>
<div class="bg_menu_1_257"></div>
<?php include('atoms/kpri.atom.menu.php');?>

<div class="kpri-main-container">
<?php 
if(isset($_GET['id'])){
    $_GET['id'] = $_GET['id'];
}
include('../../m/kpri.model.peminjaman.php');
?>
</div>

</div>

</body>
<script src="../../assets/dist/main-js/jquery-3.3.1.min.js"></script>
<script src="../../assets/dist/main-js/kpri-main.js"></script>
<script src="../../assets/dist/main-js/admin.js"></script>