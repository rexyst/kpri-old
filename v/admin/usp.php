<head>
<?php 
session_start();
include('atoms/kpri.atom.head.html'); 
?>
</head>
<body>

<div class=halaman_utama_1_250>
<div id="kolom_header" class="kolom_header">
</div>
<div class="bg_menu_1_257"></div>
<?php include('atoms/kpri.atom.menu.php');?>

<div class="kpri-search-bar-container">
<form action="../../c/kpri.c.php?action=search-employee" method="post">
<input class="kpri-search-bar" type="text" name="name" placeholder="Cari Nama">
<input class="kpri-search-button" type="submit" value="Cari">
</form>
</div>

<div class="kpri-main-container">
<?php
if(isset($_GET['action'])){
    $_SESSION['name'] = $_GET['name'];
    $_SESSION['option'] = $_GET['option'];
    include('../../m/kpri.model.search.php');    
} else {
    $_GET['type'] = 'USP';
    include('../../m/kpri.model.peminjaman.php');
}

?>
</div>

</body>
<script src="../../assets/dist/main-js/jquery-3.3.1.min.js"></script>
<script src="../../assets/dist/main-js/kpri-main.js"></script>
<script src="../../assets/dist/main-js/admin.js"></script>