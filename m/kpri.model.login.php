<style type="text/css">
@font-face {
  font-family: "modern";
  src: url('../assets/dist/main-css/modern_sans_serif.ttf');
}

.error {
  font-family: "modern";
}
</style>

<?php
require_once("kpri.db.php");
if(isset($_POST['nip']) && isset($_POST['sandi'])) {
  $nip = $_POST['nip'];
  $sandi = $_POST['sandi'];
} else {
  ?>
  <script>
  console.log("Identitas belum diisi.");
  var z = confirm("Identitas belum diisi.");
  if (z == true) {
    window.open('../index.php', '_SELF');
  }
  else {
    window.open('../index.php', '_SELF');
  }
  </script>
  <?php
}

$sql = "SELECT akun.`nip`, akun.`nama`,jenis_kelamin.`jenis_kelamin`,akun.`kata_sandi`,akun.`tempat_lahir`,akun.`tanggal_lahir`,akun.`alamat_rumah`,akun.`kode_pos`,akun.`nomor_hp`,akun.`instansi`,akun.`alamat_instansi`,akun.`ktp_suami`,akun.`ktp_istri`,akun.`foto_3x4`,akun.`tanggal_registrasi`,akun.`foto_profil`,status_akun.`status`,level.`level` FROM `akun` join jenis_kelamin on akun.jenis_kelamin=jenis_kelamin.`id_jenis_kelamin` join status_akun on akun.`status`=status_akun.id_status join `level` on `akun`.`level`=`level`.`id_level` where nip =".$nip;
$query = $con->query($sql);
$hasil = $query->fetch_assoc();
if($query->num_rows == 0) {
  ?>
  <script>
  console.log("NIP belum terdaftar, silahkan melakukan registrasi terlebih dahulu.");
  var z = confirm("NIP belum terdaftar, silahkan melakukan registrasi terlebih dahulu.");
  if (z == true) {
    window.open('../index.php', '_SELF');
  }
  else {
    window.open('../index.php', '_SELF');
  }
  </script>
  <?php
} else {
  if($sandi <> $hasil['kata_sandi']) {
    ?>
    <script>
    console.log("Kata sandi salah, silahkan periksa ulang data anda.");
    var z = confirm("Kata sandi salah, silahkan periksa ulang data anda.");
    if (z == true) {
      window.open('../index.php', '_SELF');
    }
    else {
      window.open('../index.php', '_SELF');
    }
    </script>
    <?php
  } else {
    session_start();
    $_SESSION['nama'] = $hasil['nama'];
    $_SESSION['nip'] = $hasil['nip'];
    $_SESSION['jenis-kelamin'] = $hasil['jenis_kelamin'];
    $_SESSION['tempat-lahir'] = $hasil['tempat_lahir'];
    $_SESSION['tanggal-lahir'] = $hasil['tanggal_lahir'];
    $_SESSION['alamat-rumah'] = $hasil['alamat_rumah'];
    $_SESSION['kode-pos'] = $hasil['kode_pos'];
    $_SESSION['no-hp'] = $hasil['nomor_hp'];
    $_SESSION['instansi'] = $hasil['instansi'];
    $_SESSION['alamat-instansi'] = $hasil['alamat_instansi'];
    $_SESSION['ktp-suami'] = $hasil['ktp_suami'];
    $_SESSION['ktp-istri'] = $hasil['ktp_istri'];
    $_SESSION['ft3x4'] = $hasil['foto_3x4'];
    $_SESSION['foto-profil'] = $hasil['foto_profil'];
    $_SESSION['tgl-registrasi'] = $hasil['tanggal_registrasi'];
    $_SESSION['level'] = $hasil['level'];
    
    header('location:../c/kpri.c.php?action=home');
  }
}
?>