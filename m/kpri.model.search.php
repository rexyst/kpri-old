<?php
require_once('kpri.db.php');
$level = $_SESSION['level'];
$sql;
if($_SESSION['option']=='employee'){
if ($_SESSION['name']==''){
$sql = "SELECT akun.`nip`, akun.`nama`,jenis_kelamin.`jenis_kelamin`,akun.`kata_sandi`,akun.`tempat_lahir`,akun.`tanggal_lahir`,akun.`alamat_rumah`,akun.`kode_pos`,akun.`nomor_hp`,akun.`instansi`,akun.`alamat_instansi`,akun.`ktp_suami`,akun.`ktp_istri`,akun.`foto_3x4`,akun.`tanggal_registrasi`,akun.`foto_profil`,status_akun.`status`,level.`level` FROM `akun` join jenis_kelamin on akun.jenis_kelamin=jenis_kelamin.`id_jenis_kelamin` join status_akun on akun.`status`=status_akun.id_status join `level` on akun.`level`=`level`.`id_level` where `level`.`id_level` = 2 or `level`.`id_level` = 3 ORDER BY `akun`.`nip` asc";
}else {
$sql = "SELECT akun.`nip`, akun.`nama`,jenis_kelamin.`jenis_kelamin`,akun.`kata_sandi`,akun.`tempat_lahir`,akun.`tanggal_lahir`,akun.`alamat_rumah`,akun.`kode_pos`,akun.`nomor_hp`,akun.`instansi`,akun.`alamat_instansi`,akun.`ktp_suami`,akun.`ktp_istri`,akun.`foto_3x4`,akun.`tanggal_registrasi`,akun.`foto_profil`,status_akun.`status`,level.`level` FROM `akun` join jenis_kelamin on akun.jenis_kelamin=jenis_kelamin.`id_jenis_kelamin` join status_akun on akun.`status`=status_akun.id_status join `level` on akun.`level`=`level`.`id_level` where `akun`.`nama` LIKE '%".$_SESSION['name']."%' AND `level`.`id_level` = 2 or `akun`.`nama` like '%".$_SESSION['name']."%' AND `level`.`id_level` = 3 ORDER BY `akun`.`nip` asc";
}

$query = $con->query($sql);
if($query->num_rows == 0) {
    ?>
    <h2>
        Nama tidak ditemukan.
    </h2>
    <?php
}
else {
    ?>
    <table id="tabel-member" cellpadding="5" cellspacing="0">
	<tr>
		<th class="table-sort">NIP</th>
		<th class="table-sort">Nama</th>
		<th class="table-sort">Jenis Kelamin</th>
		<th class="table-sort">Jabatan</th>
		<th class="table-sort">Status</th>
		<th>Aksi</th>
	</tr>
	<?php if(mysqli_num_rows($query)>0) { ?>
	<?php
	while ($data = mysqli_fetch_array($query)) {
		?>
		<tr>
			<td><?php echo $data["nip"];?></td>
			<td><?php echo $data["nama"];?></td>
			<td><?php echo $data["jenis_kelamin"];?></td>
			<td><?php echo $data["level"];?></td>
			<td><?php echo $data["status"];?></td>
			<td>
			<div id="aksi">
				<a target="_self" href="../../c/kpri.c.php?action=profile&nip=<?php echo $data["nip"];?>"><img src="../../assets/i/show.png"></a>
				<a target="_self" href="../../c/kpri.c.php?action=profile-update&nip=<?php echo $data["nip"];?>"><img src="../../assets/i/edit.png"></a>
				</div>
			</td>
		</tr>
		<?php }} ?>
	</table>
    <?php
}
} else if($_SESSION['option']=='member'){
    if ($_SESSION['name']==''){
        $sql = "SELECT akun.`nip`, akun.`nama`,jenis_kelamin.`jenis_kelamin`,akun.`kata_sandi`,akun.`tempat_lahir`,akun.`tanggal_lahir`,akun.`alamat_rumah`,akun.`kode_pos`,akun.`nomor_hp`,akun.`instansi`,akun.`alamat_instansi`,akun.`ktp_suami`,akun.`ktp_istri`,akun.`foto_3x4`,akun.`tanggal_registrasi`,akun.`foto_profil`,status_akun.`status`,level.`level` FROM `akun` join jenis_kelamin on akun.jenis_kelamin=jenis_kelamin.`id_jenis_kelamin` join status_akun on akun.`status`=status_akun.id_status join `level` on akun.`level`=`level`.`id_level` where `level`.`id_level` = 1 ORDER BY `akun`.`nip` asc";
        }else {
        $sql = "SELECT akun.`nip`, akun.`nama`,jenis_kelamin.`jenis_kelamin`,akun.`kata_sandi`,akun.`tempat_lahir`,akun.`tanggal_lahir`,akun.`alamat_rumah`,akun.`kode_pos`,akun.`nomor_hp`,akun.`instansi`,akun.`alamat_instansi`,akun.`ktp_suami`,akun.`ktp_istri`,akun.`foto_3x4`,akun.`tanggal_registrasi`,akun.`foto_profil`,status_akun.`status`,level.`level` FROM `akun` join jenis_kelamin on akun.jenis_kelamin=jenis_kelamin.`id_jenis_kelamin` join status_akun on akun.`status`=status_akun.id_status join `level` on akun.`level`=`level`.`id_level` where `akun`.`nama` LIKE '%".$_SESSION['name']."%' AND `level`.`id_level` = 1 ORDER BY `akun`.`nip` asc";
        }
        
        $query = $con->query($sql);
        if($query->num_rows == 0) {
            ?>
            <h2>
                Nama tidak ditemukan.
            </h2>
            <?php
        }
        else {
            ?>
            <table id="tabel-member" cellpadding="5" cellspacing="0">
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Jabatan</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
            <?php if(mysqli_num_rows($query)>0) { ?>
            <?php
            while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $data["nip"];?></td>
                    <td><?php echo $data["nama"];?></td>
                    <td><?php echo $data["jenis_kelamin"];?></td>
                    <td><?php echo $data["level"];?></td>
                    <td><?php echo $data["status"];?></td>
                    <td>
                    <div id="aksi">
                        <a target="_self" href="../../c/kpri.c.php?action=profile&nip=<?php echo $data["nip"];?>"><img src="../../assets/i/show.png"></a>
                        <a target="_self" href="../../c/kpri.c.php?action=profile-update&nip=<?php echo $data["nip"];?>"><img src="../../assets/i/edit.png"></a>
                        </div>
                    </td>
                </tr>
                <?php }} ?>
            </table>
            <?php
        }
}
?>