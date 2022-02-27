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
<input class="kpri-search-bar" type="text" id="member" onkeyup="filt('member', 1)" placeholder="Cari Nama">
</form>
</div>

<div class="kpri-main-container">
<table id="tabel-member" cellpadding="5" cellspacing="0">
    <?php
        include('../../m/kpri.model.member.php');
    ?>
</table>
</div>

</body>
<script src="../../assets/dist/main-js/jquery-3.3.1.min.js"></script>
<script src="../../assets/dist/main-js/kpri-main.js"></script>
<script src="../../assets/dist/main-js/admin.js"></script>