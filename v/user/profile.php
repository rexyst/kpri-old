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

<div class="kpri-main-container">
<div class=kolom_profil_1_112>
<?php 
$_GET['nip'] = $_SESSION['nip'];
include('../../m/kpri.model.profile.php');
?>
</div>
</div>

</div>
</body>
<script src="../../assets/dist/main-js/jquery-3.3.1.min.js"></script>
<script src="../../assets/dist/main-js/kpri-main.js"></script>
<script src="../../assets/dist/main-js/admin.js"></script>