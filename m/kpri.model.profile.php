<?php
require_once('kpri.db.php');
$sql = "SELECT akun.`nip`, akun.`nama`,jenis_kelamin.`jenis_kelamin`,akun.`kata_sandi`,akun.`tempat_lahir`,akun.`tanggal_lahir`,akun.`alamat_rumah`,akun.`kode_pos`,akun.`nomor_hp`,akun.`instansi`,akun.`alamat_instansi`,akun.`ktp_suami`,akun.`ktp_istri`,akun.`foto_3x4`,akun.`tanggal_registrasi`,akun.`foto_profil`,status_akun.`status`,level.`level` FROM `akun` join jenis_kelamin on akun.jenis_kelamin=jenis_kelamin.`id_jenis_kelamin` join status_akun on akun.`status`=status_akun.id_status join level on level.id_level=akun.`level` where nip = ".$_GET['nip'];
$query = $con->query($sql);
if($query->num_rows == 0) {}
else {
    if(mysqli_num_rows($query)>0) { 
        while ($data = mysqli_fetch_array($query)) {
            ?>
            <div class="foto_profil_1_113">
            <img id=kpri-ubah-foto-profil onclick="ubahFotoProfil()" src="../../assets/i/foto-profil.png">
            <img id="foto-profil" onclick="ubahFotoProfil()" src="../../assets/i/user_profil/<?php echo $data['foto_profil']; ?>">
            </div>
            <div class=kolom_nama_1_114><span  class="nama_1_115">Nama</span><span  class="__1_116">: <?php echo $data['nama']; ?></span></div>
            <div class=kolom_nip_1_117><span  class="nip_1_118">NIP </span><span  class="__1_119">: <?php echo $data['nip']; ?></span></div>
            <div class=kolom_jenis_kelamin_158_5><span  class="jenis_kelamin_158_6">Jenis Kelamin</span><span  class="__158_7">: <?php echo $data['jenis_kelamin']; ?></span></div>
            <div class=kolom_tempat_lahir_1_120><span  class="tempat_lahir_1_121">Tempat Lahir</span><span  class="__1_122">: <?php echo $data['tempat_lahir']; ?></span></div>
            <div class=kolom_tanggal_lahir_1_123><span  class="tanggal_lahir_1_124">Tanggal Lahir</span><span  class="__1_125">: <?php echo $data['tanggal_lahir']; ?></span></div>
            <div class=kolom_alamat_rumah_1_126><span  class="alamat_rumah_1_127">Alamat Rumah</span><span  class="__1_128">: <?php echo $data['alamat_rumah']; ?></span></div>
            <div class=kolom_kode_pos_158_8><span  class="kode_pos_158_9">Kode Pos</span><span  class="__158_10">: <?php echo $data['kode_pos']; ?></span></div>
            <div class=kolom_no_hp_1_132><span  class="nomor_hp_1_133">Nomor Hp</span><span  class="__1_134">: <?php echo $data['nomor_hp']; ?></span></div>
            <div class=kolom_instansi_158_11><span  class="__158_12">: <?php echo $data['instansi']; ?></span><span  class="instansi_158_13">Instansi</span></div>
            <div class=kolom_alamat_instansi_1_129><span  class="__1_130">: <?php echo $data['alamat_instansi']; ?></span><span  class="alamat_instansi_1_131">Alamat Instansi</span></div>
            <div class=kolom_ktp_suami_1_135><span  class="foto_ktp_suami_1_136">Foto KTP Suami</span><span  class="__1_137">: <?php echo $data['ktp_suami']; ?><img id="ktp-suami-show" class="kpri-profile-show-icon" src="../../assets/i/show.png"></span></div>
            <div class=kolom_ktp_istri_1_138><span  class="foto_ktp_istri_1_139">Foto KTP Istri</span><span  class="__1_140">: <?php echo $data['ktp_istri']; ?><img id="ktp-istri-show" class="kpri-profile-show-icon" src="../../assets/i/show.png"></span></div>
            <div class=kolom_foto_3x4_1_141><span  class="foto_3x4_1_142">Foto 3x4</span><span  class="__1_143">: <?php echo $data['foto_3x4']; ?><img id="foto-3x4-show" class="kpri-profile-show-icon" src="../../assets/i/show.png"></span></div>
            <div class=kolom_tanggal_registrasi_158_14><span  class="tanggal_registrasi_158_15">Tanggal Registrasi</span><span  class="__158_16">: <?php echo $data['tanggal_registrasi']; ?></span></div>
            <div class=tombol_update_profil_1_144>
            <div class="tombol_selanjitnya_1_145"></div>
            <button class="tombol_selanjitnya_1_145" onclick="window.open('../../c/kpri.c.php?action=profile-update&nip=<?php echo $data['nip'];?>', '_SELF')"><span  class="update_profil_1_146">UPDATE PROFIL</span></button>
            </div>
            <div class=tombol_update_profil_1_1441>
            <div class="tombol_selanjitnya_1_145"></div>
            <?php
            if($_GET['nip']==$_SESSION['nip']){
                echo '<button class="tombol_selanjitnya_1_145" onclick="ubahsandi()"><span  class="update_profil_1_146">UBAH SANDI</span></button>';
            } else {
                echo '<button class="tombol_selanjitnya_1_145" onclick="window.open('."'".'../../m/kpri.model.profile-updater.php?a=10&nip='.$data['nip']."'".', '."'".'_SELF'."'".')"><span  class="update_profil_1_146">RESET SANDI</span></button>';
            }
            ?>
            </div>
            
            
            
            <div id="modal-ktp-suami" class="modal">
            <div class="modal-content">
            <div class="modal-header">
            <span id="closea" class="close">&times;</span>
            <h2>Foto KTP Suami</h2>
            </div>
            <div class="modal-body">
            <img src="../../assets/i/user_ktp_suami/<?php echo $data['ktp_suami'];?>" alt="../../assets/i/user_ktp_suami/<?php echo $data['ktp_suami'];?>">
            </div>
            <div class="modal-footer">
            <div class="modal-footer-left">
            <h3>KPRI Wiyata Usaha</h3>
            </div>
            <div class="modal-footer-right">
            <a href="../../assets/i/user_ktp_suami/<?php echo $data['ktp_suami'];?>" target="_blank"><button type="button" class="kpri-tombol-ubah">Ukuran Penuh</button></a>
            <button type="button" class="kpri-tombol-ubah" onclick="ubahFotoKTPSuami()">Ubah Foto</button>
            </div>
            </div>
            </div>
            </div>
            
            <div id="modal-ktp-istri" class="modal">
            <div class="modal-content">
            <div class="modal-header">
            <span id="closeb" class="close">&times;</span>
            <h2>Foto KTP Istri</h2>
            </div>
            <div class="modal-body">
            <img src="../../assets/i/user_ktp_istri/<?php echo $data['ktp_istri'];?>" alt="../../assets/i/user_ktp_istri/<?php echo $data['ktp_istri'];?>">
            </div>
            <div class="modal-footer">
            <div class="modal-footer-left">
            <h3>KPRI Wiyata Usaha</h3>
            </div>
            <div class="modal-footer-right">
            <a href="../../assets/i/user_ktp_istri/<?php echo $data['ktp_istri'];?>" target="_blank"><button type="button" class="kpri-tombol-ubah">Ukuran Penuh</button></a>
            <button type="button" class="kpri-tombol-ubah" onclick="ubahFotoKTPIstri()">Ubah Foto</button>
            </div>
            </div>
            </div>
            </div>
            
            <div id="modal-3x4" class="modal">
            <div class="modal-content">
            <div class="modal-header">
            <span id="closec" class="close">&times;</span>
            <h2>Foto 3x4</h2>
            </div>
            <div class="modal-body">
            <img src="../../assets/i/user_3x4/<?php echo $data['foto_3x4'];?>" alt="../../assets/i/user_3x4/<?php echo $data['foto_3x4'];?>">
            </div>
            <div class="modal-footer">
            <div class="modal-footer-left">
            <h3>KPRI Wiyata Usaha</h3>
            </div>
            <div class="modal-footer-right">
            <a href="../../assets/i/user_3x4/<?php echo $data['foto_3x4'];?>" target="_blank"><button type="button" class="kpri-tombol-ubah">Ukuran Penuh</button></a>
            <button type="button" class="kpri-tombol-ubah" onclick="ubahFoto3x4()">Ubah Foto</button>
            </div>
            </div>
            </div>
            </div>
            
            
            <!-- modal ubah foto profil -->
            <div id="modal-ubah-foto-profil" class="modal">
            <form action="../../m/kpri.model.profile-updater.php?a=8&nip=<?php echo $data['nip'];?>" method="post" enctype="multipart/form-data">
            <div class="modal-content">
            <div class="modal-header">
            <span id="closez" class="close">&times;</span>
            <h2>Ubah Foto Profil</h2>
            </div>
            <div class="modal-body">
            <div class="input-foto">
            <input class="kpri-input" type="file" name="foto-profile" id="foto-profil" required>
            </div>
            </div>
            <div class="modal-footer">
            <div class="modal-footer-left">
            <h3>KPRI Wiyata Usaha</h3>
            </div>
            <div class="modal-footer-right">
            <input type="submit" name="submit" value="Simpan" class="kpri-tombol-ubah">
            </div>
            </div>
            </div>
            </form>
            </div>
            
            <!-- modal ubah foto KTP suami -->
            <div id="modal-ubah-foto-ktp-suami" class="modal">
            <form action="../../m/kpri.model.profile-updater.php?a=5&nip=<?php echo $data['nip'];?>" method="post" enctype="multipart/form-data">
            <div class="modal-content">
            <div class="modal-header">
            <span id="closezz" class="close">&times;</span>
            <h2>Ubah Foto KTP Suami</h2>
            </div>
            <div class="modal-body">
            <div class="input-foto">
            <input class="kpri-input" type="file" name="foto-ktp-suami" id="foto-ktp-suami" required>
            </div>
            </div>
            <div class="modal-footer">
            <div class="modal-footer-left">
            <h3>KPRI Wiyata Usaha</h3>
            </div>
            <div class="modal-footer-right">
            <input type="submit" name="submit" value="Simpan" class="kpri-tombol-ubah">
            </div>
            </div>
            </div>
            </form>
            </div>
            
            <!-- modal ubah foto KTP Istri -->
            <div id="modal-ubah-foto-ktp-Istri" class="modal">
            <form action="../../m/kpri.model.profile-updater.php?a=6&nip=<?php echo $data['nip'];?>" method="post" enctype="multipart/form-data">
            <div class="modal-content">
            <div class="modal-header">
            <span id="closezzz" class="close">&times;</span>
            <h2>Ubah Foto KTP Istri</h2>
            </div>
            <div class="modal-body">
            <div class="input-foto">
            <input class="kpri-input" type="file" name="foto-ktp-istri" id="foto-ktp-Istri" required>
            </div>
            </div>
            <div class="modal-footer">
            <div class="modal-footer-left">
            <h3>KPRI Wiyata Usaha</h3>
            </div>
            <div class="modal-footer-right">
            <input type="submit" name="submit" value="Simpan" class="kpri-tombol-ubah">
            </div>
            </div>
            </div>
            </form>
            </div>
            
            <!-- modal ubah foto 3x4 -->
            <div id="modal-ubah-foto-3x4" class="modal">
            <form action="../../m/kpri.model.profile-updater.php?a=7&nip=<?php echo $data['nip'];?>" method="post" enctype="multipart/form-data">
            <div class="modal-content">
            <div class="modal-header">
            <span id="closezzzz" class="close">&times;</span>
            <h2>Ubah Foto Profil</h2>
            </div>
            <div class="modal-body">
            <div class="input-foto">
            <input class="kpri-input" type="file" name="foto-3x4" id="foto-3x4" required>
            </div>
            </div>
            <div class="modal-footer">
            <div class="modal-footer-left">
            <h3>KPRI Wiyata Usaha</h3>
            </div>
            <div class="modal-footer-right">
            <input type="submit" name="submit" value="Simpan" class="kpri-tombol-ubah">
            </div>
            </div>
            </div>
            </form>
            </div>
            
            <!-- modal ubah kata sandi -->
            <div id="modal-ubah-sandi" class="modal">
            <form action="../../m/kpri.model.profile-updater.php?a=9&nip=<?php echo $data['nip'];?>" method="post" enctype="multipart/form-data">
            <div class="modal-content">
            <div class="modal-header">
            <span id="closesandi" class="close">&times;</span>
            <h2>Ubah Kata Sandi</h2>
            </div>
            <div class="modal-body">
            <div class="input-foto">
            <div class="kata_sandi_1_2411">
            <div class="kolom_kata_sandi_1_2421 tooltip">
            <input class="kpri-input kpri-specials" required name="sandi-baru" id="kpri-kata-sandia" type="password" placeholder="KATA SANDI BARU">
            <span class="tooltiptext">Kata sandi baru</span>
            <span class="kpri-sandi">
            <a id="tampilkan-sandia" href="#" onclick="tampilsandia()">
            <img class="kpri-logo-specials" id="kpri-logo-passworda" style="position: absolute; left: 126px; top: 6px;" src="../../assets/i/show.png">
            </a>
            </span>
            </div>
            </div>

            <div class="kata_sandi_1_2412">
            <div class="kolom_kata_sandi_1_2422 tooltip">
            <input class="kpri-input kpri-specials" required name="konfirmasi-sandi" id="kpri-kata-sandib" type="password" placeholder="KONFIRMASI KATA SANDI BARU">
            <span class="tooltiptext">Konfirmasi kata sandi baru</span>
            <span class="kpri-sandi">
            <a id="tampilkan-sandib" href="#" onclick="tampilsandib()">
            <img class="kpri-logo-specials" id="kpri-logo-passwordb" style="position: absolute; left: 126px; top: 6px;" src="../../assets/i/show.png">
            </a>
            </span>
            </div>
            </div>

            </div>
            </div>
            <div class="modal-footer">
            <div class="modal-footer-left">
            <h3>KPRI Wiyata Usaha</h3>
            </div>
            <div class="modal-footer-right">
            <input type="submit" name="submit" value="Simpan" class="kpri-tombol-ubah">
            </div>
            </div>
            </div>
            </form>
            </div>
            
            <?php }} ?>
            <?php
        }
        ?>