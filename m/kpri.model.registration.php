<?php
require_once('kpri.db.php');

$nama = $_POST['nama'];
$sandi = $_POST['kata-sandi'];
$kelamin = $_POST['jenis-kelamin'];
$nip = $_POST['nip'];
$tempatLahir = $_POST['tempat-lahir'];
$tanggalLahir = date_create($_POST['tanggal-lahir']);
$alamatRumah = $_POST['alamat-rumah'];
$pos = $_POST['kode-pos'];
$hp = $_POST['nomor-hp'];
$instansi = $_POST['instansi'];
$alamatInstansi = $_POST['alamat-instansi'];
$ktpSuami = $_FILES['foto-ktp-suami'];
$ktpIstri = $_FILES['foto-ktp-istri'];
$foto3x4 = $_FILES['foto-3x4'];
$rekening = 0;

//  start up data foto
$target_dira = "../assets/i/user_ktp_suami/";
$target_filea = $target_dira . $nip . "_KTP_SUAMI.jpg";
$ftKTPSuami = $nip . "_KTP_SUAMI.jpg";
$uploadOka = 1;
$imageFileTypea = strtolower(pathinfo($target_filea,PATHINFO_EXTENSION));
$target_dirb = "../assets/i/user_ktp_istri/";
$target_fileb = $target_dirb . $nip . "_KTP_ISTRI.jpg";
$ftKTPIstri = $nip . "_KTP_ISTRI.jpg";
$uploadOkb = 1;
$imageFileTypeb = strtolower(pathinfo($target_fileb,PATHINFO_EXTENSION));
$target_dirc = "../assets/i/user_3x4/";
$target_filec = $target_dirc . $nip . "_3x4.jpg";
$ft3x4 = $nip . "_3x4.jpg";
$uploadOkc = 1;
$imageFileTypec = strtolower(pathinfo($target_filec,PATHINFO_EXTENSION));
$target_dird = "../assets/i/user_profil/";
$target_filed = $target_dird . $nip . "_profile.jpg";
$ftprofile = $nip . "_profile.jpg";
$uploadOkd = 1;
// end up data foto

try {
    $overallstatus = 1;
    $sql = "SELECT nip FROM `akun` where nip = ".$nip;
    $query = $con->query($sql);
    $hasil = $query->fetch_assoc();
    if($query->num_rows == 0) {
        
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
        
        // Check if file already exists
        if (file_exists($target_filea)) {
            $uploadOka = 0;
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
                <script>
                console.log(<?php echo "Berkas ". htmlspecialchars( basename( $_FILES["foto-ktp-suami"]["name"])). " telah diunggah.";?>);
                
                </script>
                <?php
            } else {
                $overallstatus = 0;
                ?>
                <script>console.log("Terdapat masalah saat mengunggah berkas anda")
                <?php
            }
        }
        
        
        // up foto ktp istri
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["foto-ktp-istri"]["tmp_name"]);
            if($check !== false) {
                $uploadOkb = 1;
            } else {
                $uploadOkb = 0;
            }
        }
        
        // Check if file already exists
        if (file_exists($target_fileb)) {
            $uploadOkb = 0;
        }
        
        // Check file size
        if ($_FILES["foto-ktp-istri"]["size"] > 2000000) {
            $uploadOkb = 0;
        }
        
        // Allow certain file formats
        if($imageFileTypeb != "jpg") {
            $uploadOkb = 0;
        }
        
        // Check if $uploadOkb is set to 0 by an error
        if ($uploadOkb == 0) {
            $overallstatus = 0;
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["foto-ktp-istri"]["tmp_name"], $target_fileb)) {
                $overallstatus = 1;
                ?>
                <script>
                console.log(<?php echo "Berkas ". htmlspecialchars( basename( $_FILES["foto-ktp-istri"]["name"])). " telah diunggah.";?>);
                
                </script>
                <?php
            } else {
                $overallstatus = 0;
                ?>
                <script>console.log("Terdapat masalah saat mengunggah berkas anda")
                <?php
            }
        }
        
        
        // up foto ktp 3x4 and foto profil
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["foto-3x4"]["tmp_name"]);
            if($check !== false) {
                $uploadOkc = 1;
            } else {
                $uploadOkc = 0;
            }
        }
        
        // Check if file already exists
        if (file_exists($target_filec)) {
            $uploadOkc = 0;
        }
        
        // Check file size
        if ($_FILES["foto-3x4"]["size"] > 2000000) {
            $uploadOkc = 0;
        }
        
        // Allow certain file formats
        if($imageFileTypec != "jpg") {
            $uploadOkc = 0;
        }
        
        // Check if $uploadOkc is set to 0 by an error
        if ($uploadOkc == 0) {
            $overallstatus = 0;
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["foto-3x4"]["tmp_name"], $target_filec)) {
                copy($target_filec, $target_filed);
                $overallstatus = 1;
                ?>
                <script>
                console.log(<?php echo "Berkas ". htmlspecialchars( basename( $_FILES["foto-3x4"]["name"])). " telah diunggah.";?>);
                </script>
                <?php
            } else {
                $overallstatus = 0;
                ?>
                <script>console.log("Terdapat masalah saat mengunggah berkas anda")
                <?php
            }
        }
        
        if($overallstatus == 1){
            
            $sqla = "SELECT nomor_rekening FROM `rekening` order by nomor_rekening DESC limit 1";
            $querya = $con->query($sqla);
            $hasil = $querya->fetch_assoc();
            if($querya->num_rows == 0) {
                $rekening = 0;
            } else {
                $rekening = $hasil['nomor_rekening']+1;
            }
            
            $sqlb = "INSERT INTO `rekening` (`nomor_rekening`, `saldo_tabungan`, `saldo_simpanan`) 
            VALUES (".$rekening.", 0, 0)";
            
            if ($con->query($sqlb) === TRUE) {
                ?>
                <script>console.log("Berhasil menyimpan rekening");</script>
                <?php
            } else {
                ?>
                <script>console.log("Gagal menyimpan rekening");</script>
                <?php
            }
            
            $sqlc = "INSERT INTO `akun` (`nip`, `nama`, `jenis_kelamin`, `kata_sandi`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `kode_pos`, `nomor_hp`, `instansi`, `alamat_instansi`, `ktp_suami`, `ktp_istri`, `foto_3x4`, `tanggal_registrasi`, `foto_profil`, `status`, `level`, `nomor_rekening`) 
            VALUES (".$nip.", '".$nama."', ".$kelamin.", '".$sandi."', '".$tempatLahir."', '".date_format($tanggalLahir,"d/m/Y")."', '".$alamatRumah."', ".$pos.", ".$hp.", '".$instansi."', '".$alamatInstansi."', '".$ftKTPSuami."', '".$ftKTPIstri."', '".$ft3x4."', '".date("d/m/Y")."', '".$ftprofile."', '1', '1', ".$rekening.")";
            
            if ($con->query($sqlc) === TRUE) {
                ?>
                <script>
                console.log("Berhasil menyimpan data personal");
                var z = confirm("Berhasil melakukan registrasi, silahkan masuk untuk melanjutkan.");
                if (z == true) {
                    window.open('../index.php', '_SELF');
                }
                else {
                    window.open('../index.php', '_SELF');
                }
                </script>
                <?php
            } else {
                ?>
                <script>
                console.log("Gagal menyimpan data personal");
                var z = confirm("Gagal melakukan registrasi, silahkan cek ulang data anda.");
                if (z == true) {
                    window.open('../c.php?action=registrasi', '_SELF');
                }
                else {
                    window.open('../c.php?action=registrasi', '_SELF');
                }
                </script>
                <?php
            }
            
        } else {
            ?>
            <script>
            console.log("Gagal menyimpan data personal");
    var z = confirm("Gagal mendaftar, silahkan hubungi staff KPRI untuk informasi lebih lanjut. Terima kasih. #ERROR-CODE:01");
            if (z == true) {
                window.open('../index.php', '_SELF');
            }
            else {
                window.open('../index.php', '_SELF');
            }
            </script>
            <?php
        }
    } else {
        ?>
        <script>
        console.log("NIP sudah terdaftar");
            var z = confirm("NIP anda sudah terdaftar, silahkan masuk dengan akun anda.");
        if (z == true) {
            window.open('../index.php', '_SELF');
        }
        else {
            window.open('../index.php', '_SELF');
        }
        </script>
        <?php
    }
} catch (\Exception $e) {
    ?>
    <script>
    console.log("Gagal menyimpan data personal");
    var z = confirm("Gagal mendaftar, silahkan hubungi staff KPRI untuk informasi lebih lanjut. Terima kasih. #ERROR-CODE:02");
    if (z == true) {
        window.open('../index.php', '_SELF');
    }
    else {
        window.open('../index.php', '_SELF');
    }
    </script>
    <?php
}

?>