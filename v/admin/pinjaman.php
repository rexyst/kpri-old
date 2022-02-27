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
<input class="kpri-search-bar" type="text" id="pinjaman" onkeyup="filt('pinjaman', 2)" placeholder="Cari Nama">
</form>
</div>

<div class="kpri-main-container">
<table id="tabel-member" cellpadding="5" cellspacing="0">
<?php
$_GET['type'] = 'all';
    include('../../m/kpri.model.peminjaman.php');
?>
</table>
</div>

<div class=tombol_tambah_data_transaksi_308_42>
    <button class="tombol_menambah_transaksi_308_43">
    <span  class="teks_menambah_transaksi_308_44">MENAMBAH TRANSAKSI</span>
    </button>
  </div>

</body>
<script src="../../assets/dist/main-js/jquery-3.3.1.min.js"></script>
<script src="../../assets/dist/main-js/kpri-main.js"></script>
<script src="../../assets/dist/main-js/admin.js"></script>