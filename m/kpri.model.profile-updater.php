<?php

require_once('kpri.db.php');
session_start();
$sql;

if($_GET['a']==1){
    
    $sql = "UPDATE `akun` SET `level`=".$_POST['level']." where `nip` = ".$_GET['nip'];
    
} else if($_GET['a']==2){
    
    $sql = "UPDATE `akun` SET `status`=".$_POST['status']." where `nip` = ".$_GET['nip'];
    
} else if($_GET['a']==3){
    
    $sql = "UPDATE `akun` SET 
    `nip`=".$_POST['nip'].",
    `nama`=".$_POST['nama'].",
    `jenis_kelamin`=".$_POST['jenis-kelamin'].",
    `tempat_lahir`=".$_POST['tempat-lahir'].",
    `tanggal_lahir`=".$_POST['tanggal-lahir'].",
    `alamat_rumah`=".$_POST['alamat-rumah'].",
    `kode_pos`=".$_POST['kode-pos'].",
    `nomor_hp`=".$_POST['nomor-hp'].",
    `instansi`=".$_POST['instansi'].",
    `alamat_instansi`=".$_POST['alamat-instansi']." 
    WHERE `nip`=".$_GET['nip'];
} else if($_GET['a']==4){
    
    $sql = "UPDATE `akun` SET 
    `nip`=".$_POST['nip'].",
    `nama`=".$_POST['nama'].",
    `jenis_kelamin`=".$_POST['jenis-kelamin'].",
    `tempat_lahir`=".$_POST['tempat-lahir'].",
    `tanggal_lahir`=".$_POST['tanggal-lahir'].",
    `alamat_rumah`=".$_POST['alamat-rumah'].",
    `kode_pos`=".$_POST['kode-pos'].",
    `nomor_hp`=".$_POST['nomor-hp'].",
    `instansi`=".$_POST['instansi'].",
    `alamat_instansi`=".$_POST['alamat-instansi']." 
    WHERE `nip`=".$_GET['nip'];
} else if($_GET['a']==5){
    
    $sql = "UPDATE `akun` SET 
    `nip`=".$_POST['nip'].",
    `nama`=".$_POST['nama'].",
    `jenis_kelamin`=".$_POST['jenis-kelamin'].",
    `tempat_lahir`=".$_POST['tempat-lahir'].",
    `tanggal_lahir`=".$_POST['tanggal-lahir'].",
    `alamat_rumah`=".$_POST['alamat-rumah'].",
    `kode_pos`=".$_POST['kode-pos'].",
    `nomor_hp`=".$_POST['nomor-hp'].",
    `instansi`=".$_POST['instansi'].",
    `alamat_instansi`=".$_POST['alamat-instansi']." 
    WHERE `nip`=".$_GET['nip'];
} else if($_GET['a']==6){
    $target_dira = "../assets/i/user_ktp_suami/";
    $target_filea = $target_dira . $nip . "_KTP_SUAMI.jpg";
    $ftKTPSuami = $nip . "_KTP_SUAMI.jpg";
    $uploadOka = 1;
    // up foto ktp suami
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["foto-ktp-suami"]["tmp_name"]);
        if($check !== false) {
            $uploadOka = 1;
        } else {
            $uploadOka = 0;
        }
    }
    
    // Check file size
    if ($_FILES["foto-ktp-suami"]["size"] > 2000000) {
        $uploadOka = 0;
    }
    
    // Allow certain file formats
    if($imageFileTypea != "jpg") {
        $uploadOka = 0;
    }
    
    // Check if $uploadOka is set to 0 by an error
    if ($uploadOka == 0) {
        $overallstatus = 0;
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["foto-ktp-suami"]["tmp_name"], $target_filea)) {
            $overallstatus = 1;
            ?>
            <script type="text/javascript">
            console.log(<?php echo "Berkas ". htmlspecialchars( basename( $_FILES["foto-ktp-suami"]["name"])). " telah diunggah.";?>);
            
            </script>
            <?php
        } else {
            $overallstatus = 0;
            ?>
            <script type="text/javascript">console.log("Terdapat masalah saat mengunggah berkas anda");</script>
            <?php
        }
    }
}

else {
    ?>
    <script type="text/javascript">
    alert("Gagal memperbarui data.");
    window.open('../c/kpri.c.php?action=profile&nip=<?php echo $_GET["nip"];?>', '_SELF');
    </script>
    <?php
}

try {
    $query = $con->query($sql);
    ?>
    <script type="text/javascript">
    alert("<?php echo 'Berhasil menyimpan data. '.$sql; ?>");
    window.open('../c/kpri.c.php?action=profile&nip=<?php echo $_GET["nip"];?>', '_SELF');
    </script>
    <?php
}
catch (Exception $e) {
    ?>
    <script type="text/javascript">
    alert("Gagal memperbarui data.");
    window.open('../c/kpri.c.php?action=profile&nip=<?php echo $_GET["nip"];?>', '_SELF');
    </script>
    <?php
}
?>