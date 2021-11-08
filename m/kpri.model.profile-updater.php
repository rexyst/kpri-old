<?php

require_once('kpri.db.php');
session_start();
$sql;

if($_GET['a']==1){
    
    $sql = "UPDATE `akun` SET `level`=".$_POST['level']." where `nip` = ".$_GET['nip'];
    
} else if($_GET['a']==2){
    
    $sql = "UPDATE `akun` SET `status`=".$_POST['status']." where `nip` = ".$_GET['nip'];
    
} else if($_GET['a']==3){
    $sql = 'UPDATE `akun` SET 
    `nip`='.$_POST['nip'].',
    `nama`="'.$_POST['nama'].'",
    `jenis_kelamin`='.$_POST['jenis-kelamin'].',
    `tempat_lahir`="'.$_POST['tempat-lahir'].'",
    `tanggal_lahir`="'.date_format(date_create($_POST['tanggal-lahir']),"d/m/Y").'",
    `alamat_rumah`="'.$_POST['alamat-rumah'].'",
    `kode_pos`='.$_POST['kode-pos'].',
    `nomor_hp`='.$_POST['nomor-hp'].',
    `instansi`="'.$_POST['instansi'].'",
    `alamat_instansi`="'.$_POST['alamat-instansi'].'" 
    WHERE `nip`='.$_GET['nip'];
} else if($_GET['a']==4){
    $sql = "UPDATE `akun` SET 
    `alamat_rumah`='".$_POST['alamat-rumah']."',
    `kode_pos`=".$_POST['kode-pos'].",
    `nomor_hp`=".$_POST['nomor-hp'].",
    `instansi`='".$_POST['instansi']."',
    `alamat_instansi`='".$_POST['alamat-instansi']."' 
    WHERE `nip`=".$_GET['nip'];
} else if($_GET['a']==5){
    // ubah foto ktp suami
    $target_dira = "../assets/i/user_ktp_suami/";
    $target_filea = $target_dira . $_GET['nip'] . "_KTP_SUAMI.jpg";
    $ftKTPSuami = $_GET['nip'] . "_KTP_SUAMI.jpg";
    $uploadOka = 1;
    $fsize = 1;
    $fformat = 1;
    $imageFileTypea = strtolower(pathinfo($target_filea,PATHINFO_EXTENSION));
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
        $fsize = 0;
    }
    
    // Allow certain file formats
    if($imageFileTypea != "jpg") {
        $uploadOka = 0;
        $fformat = 0;
    }
    
    // Check if $uploadOka is set to 0 by an error
    if ($uploadOka == 1) {
        if (move_uploaded_file($_FILES["foto-ktp-suami"]["tmp_name"], $target_filea)) {
            $sql = "UPDATE `akun` SET `ktp_suami` = '".$ftKTPSuami."' where `nip` = ".$_GET['nip'];
        }
    } else {
        if ($fsize==0) {
            ?>
            <script type="text/javascript">
            alert("Ukuran berkas gambar lebih besar dari 2MB. Gunakan berkas gambar dengan ukuran kurang dari 2MB.");
            console.log(<?php echo "Berkas ". htmlspecialchars( basename( $_FILES["foto-ktp-suami"]["name"])). " telah diunggah.";?>);
            
            </script>
            <?php
        }
        if ($fformat==0) {
            ?>
            <script type="text/javascript">
            alert("Format berkas bukan JPG.");
            console.log(<?php echo "Berkas ". htmlspecialchars( basename( $_FILES["foto-ktp-suami"]["name"])). " telah diunggah.";?>);
            
            </script>
            <?php
        }
    }
} else if($_GET['a']==6){
    // ubah foto ktp istri
    $target_dira = "../assets/i/user_ktp_istri/";
    $target_filea = $target_dira . $_GET['nip'] . "_KTP_ISTRI.jpg";
    $ftKTPIstri = $_GET['nip'] . "_KTP_ISTRI.jpg";
    $uploadOka = 1;
    $fsize = 1;
    $fformat = 1;
    $imageFileTypea = strtolower(pathinfo($target_filea,PATHINFO_EXTENSION));
    // up foto ktp istri
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["foto-ktp-istri"]["tmp_name"]);
        if($check !== false) {
            $uploadOka = 1;
        } else {
            $uploadOka = 0;
        }
    }
    
    // Check file size
    if ($_FILES["foto-ktp-istri"]["size"] > 2000000) {
        $uploadOka = 0;
        $fsize = 0;
    }
    
    // Allow certain file formats
    if($imageFileTypea != "jpg") {
        $uploadOka = 0;
        $fformat = 0;
    }
    
    // Check if $uploadOka is set to 0 by an error
    if ($uploadOka == 1) {
        if (move_uploaded_file($_FILES["foto-ktp-istri"]["tmp_name"], $target_filea)) {
            $sql = "UPDATE `akun` SET `ktp_istri` = '".$ftKTPIstri."' where `nip` = ".$_GET['nip'];
        }
    } else {
        if ($fsize==0) {
            ?>
            <script type="text/javascript">
            alert("Ukuran berkas gambar lebih besar dari 2MB. Gunakan berkas gambar dengan ukuran kurang dari 2MB.");
            console.log(<?php echo "Berkas ". htmlspecialchars( basename( $_FILES["foto-ktp-istri"]["name"])). " telah diunggah.";?>);
            
            </script>
            <?php
        }
        if ($fformat==0) {
            ?>
            <script type="text/javascript">
            alert("Format berkas bukan JPG.");
            console.log(<?php echo "Berkas ". htmlspecialchars( basename( $_FILES["foto-ktp-istri"]["name"])). " telah diunggah.";?>);
            
            </script>
            <?php
        }
    }
} else if($_GET['a']==7){
    // ubah foto 3x4
    $target_dira = "../assets/i/user_3x4/";
    $target_filea = $target_dira . $_GET['nip'] . "_3x4.jpg";
    $ft3x4 = $_GET['nip'] . "_3x4.jpg";
    $uploadOka = 1;
    $fsize = 1;
    $fformat = 1;
    $imageFileTypea = strtolower(pathinfo($target_filea,PATHINFO_EXTENSION));
    // up foto 3x4
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["foto-3x4"]["tmp_name"]);
        if($check !== false) {
            $uploadOka = 1;
        } else {
            $uploadOka = 0;
        }
    }
    
    // Check file size
    if ($_FILES["foto-3x4"]["size"] > 2000000) {
        $uploadOka = 0;
        $fsize = 0;
    }
    
    // Allow certain file formats
    if($imageFileTypea != "jpg") {
        $uploadOka = 0;
        $fformat = 0;
    }
    
    // Check if $uploadOka is set to 0 by an error
    if ($uploadOka == 1) {
        if (move_uploaded_file($_FILES["foto-3x4"]["tmp_name"], $target_filea)) {
            $sql = "UPDATE `akun` SET `foto_3x4` = '".$ft3x4."' where `nip` = ".$_GET['nip'];
        }
    } else {
        if ($fsize==0) {
            ?>
            <script type="text/javascript">
            alert("Ukuran berkas gambar lebih besar dari 2MB. Gunakan berkas gambar dengan ukuran kurang dari 2MB.");
            console.log(<?php echo "Berkas ". htmlspecialchars( basename( $_FILES["foto-3x4"]["name"])). " telah diunggah.";?>);
            
            </script>
            <?php
        }
        if ($fformat==0) {
            ?>
            <script type="text/javascript">
            alert("Format berkas bukan JPG.");
            console.log(<?php echo "Berkas ". htmlspecialchars( basename( $_FILES["foto-3x4"]["name"])). " telah diunggah.";?>);
            
            </script>
            <?php
        }
    }
} else if($_GET['a']==8){
    // ubah foto profil
    $target_dira = "../assets/i/user_profil/";
    $target_filea = $target_dira . $_GET['nip'] . "_PROFILE.jpg";
    $ftProfile = $_GET['nip'] . "_PROFILE.jpg";
    $uploadOka = 1;
    $fsize = 1;
    $fformat = 1;
    $imageFileTypea = strtolower(pathinfo($target_filea,PATHINFO_EXTENSION));
    // up foto profil
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["foto-profile"]["tmp_name"]);
        if($check !== false) {
            $uploadOka = 1;
        } else {
            $uploadOka = 0;
        }
    }
    
    // Check file size
    if ($_FILES["foto-profile"]["size"] > 2000000) {
        $uploadOka = 0;
        $fsize = 0;
    }
    
    // Allow certain file formats
    if($imageFileTypea != "jpg") {
        $uploadOka = 0;
        $fformat = 0;
    }
    
    // Check if $uploadOka is set to 0 by an error
    if ($uploadOka == 1) {
        if (move_uploaded_file($_FILES["foto-profile"]["tmp_name"], $target_filea)) {
            $sql = "UPDATE `akun` SET `foto_profil` = '".$ftProfile."' where `nip` = ".$_GET['nip'];
        } else {
            ?>
            <script type="text/javascript">console.log("Terdapat masalah saat mengunggah berkas anda");</script>
            <?php
        }
    } else if ($uploadOka == 0) {
        if ($fsize==0) {
            ?>
            <script type="text/javascript">
            alert("Ukuran berkas gambar lebih besar dari 2MB. Gunakan berkas gambar dengan ukuran kurang dari 2MB.");
            console.log(<?php echo "Berkas ". htmlspecialchars( basename( $_FILES["foto-profile"]["name"])). " telah diunggah.";?>);
            
            </script>
            <?php
        }
        if ($fformat==0) {
            ?>
            <script type="text/javascript">
            alert("Format berkas bukan JPG.");
            console.log(<?php echo "Berkas ". htmlspecialchars( basename( $_FILES["foto-profile"]["name"])). " telah diunggah.";?>);
            
            </script>
            <?php
        }
    }
} else if($_GET['a']==9){
    if($_POST['sandi-baru']==$_POST['konfirmasi-sandi']){
        $sql = "UPDATE `akun` SET `kata_sandi` = '".$_POST['sandi-baru']."' where `nip` = ".$_GET['nip'];
    } else {
        ?>
        <script type="text/javascript">
        alert("<?php echo 'Kata sandi tidak cocok.'; ?>");
        window.open('../c/kpri.c.php?action=profile&nip=<?php echo $_GET["nip"];?>', '_SELF');
        </script>
        <?php
    }
} else if($_GET['a']==10){
    $sql = "UPDATE `akun` SET `kata_sandi` = '12345678' WHERE `nip`=".$_GET['nip'];
}

try {
    if($query = $con->query($sql)){
        if($_GET['a']==9){
            ?>
        <script type="text/javascript">
        alert("<?php echo 'Berhasil mengubah sandi.'; ?>");
        window.open('../index.php', '_SELF');
        </script>
        <?php
        } else if($_GET['a']==10){
            ?>
        <script type="text/javascript">
        alert("<?php echo 'Berhasil reset sandi. Sandi baru adalah 12345678'; ?>");
        window.open('../c/kpri.c.php?action=profile&nip=<?php echo $_GET["nip"];?>', '_SELF');
        </script>
        <?php
        } else {
        ?>
        <script type="text/javascript">
        alert("<?php echo 'Berhasil menyimpan data.'; ?>");
        window.open('../c/kpri.c.php?action=profile&nip=<?php echo $_GET["nip"];?>', '_SELF');
        </script>
        <?php
        }
    } else {
        ?>
        <script type="text/javascript">
        alert("Gagal memperbarui data. CODE #EPU2");
        // window.open('../c/kpri.c.php?action=profile&nip=<?php echo $_GET["nip"];?>', '_SELF');
        </script>
        <?php
    }
}
catch (Exception $e) {
    ?>
    <script type="text/javascript">
    alert("Gagal memperbarui data. CODE #EPU3");
    window.open('../c/kpri.c.php?action=profile&nip=<?php echo $_GET["nip"];?>', '_SELF');
    </script>
    <?php
}
?>