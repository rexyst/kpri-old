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
        <img id=kpri-ubah-foto-profil src="../../assets/i/foto-profil.png">
        <img id="foto-profil" src="../../assets/i/user_profil/<?php echo $data['foto_profil']; ?>">
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
        <div class=kolom_ktp_suami_1_135><span  class="foto_ktp_suami_1_136">Foto KTP Suami</span><span  class="__1_137">: <?php echo $data['ktp_suami']; ?><a target="_blank" href="../../assets/i/user_ktp_suami/<?php echo $data['ktp_suami']; ?>"><img class="kpri-profile-show-icon" src="../../assets/i/show.png"></a></span></div>
        <div class=kolom_ktp_istri_1_138><span  class="foto_ktp_istri_1_139">Foto KTP Istri</span><span  class="__1_140">: <?php echo $data['ktp_istri']; ?><a target="_blank" href="../../assets/i/user_ktp_istri/<?php echo $data['ktp_istri']; ?>"><img class="kpri-profile-show-icon" src="../../assets/i/show.png"></a></span></div>
        <div class=kolom_foto_3x4_1_141><span  class="foto_3x4_1_142">Foto 3x4</span><span  class="__1_143">: <?php echo $data['foto_3x4']; ?><a target="_blank" href="../../assets/i/user_3x4/<?php echo $data['foto_3x4']; ?>"><img class="kpri-profile-show-icon" src="../../assets/i/show.png"></a></span></div>
        <div class=kolom_tanggal_registrasi_158_14><span  class="tanggal_registrasi_158_15">Tanggal Registrasi</span><span  class="__158_16">: <?php echo $data['tanggal_registrasi']; ?></span></div>
        <div class=tombol_update_profil_1_144>
        <div class="tombol_selanjitnya_1_145"></div>
        <button class="tombol_selanjitnya_1_145" onclick="window.open('../../c/kpri.c.php?action=profile-update&nip=<?php echo $data['nip'];?>', '_SELF')"><span  class="update_profil_1_146">UPDATE PROFIL</span></button>
        </div>
		<?php }} ?>
    <?php
}
?>