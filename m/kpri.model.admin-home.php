<?php
require_once('kpri.db.php');
$level = $_SESSION['level'];
$sql;
if($level=='Pimpinan'){
	$sql = "SELECT akun.`nip`, akun.`nama`,jenis_kelamin.`jenis_kelamin`,akun.`kata_sandi`,akun.`tempat_lahir`,akun.`tanggal_lahir`,akun.`alamat_rumah`,akun.`kode_pos`,akun.`nomor_hp`,instansi.`nama_instansi`,instansi.`alamat_instansi`,akun.`ktp_suami`,akun.`ktp_istri`,akun.`foto_3x4`,akun.`tanggal_registrasi`,akun.`foto_profil`,status_akun.`status`,level.`level` FROM `akun` join jenis_kelamin on akun.jenis_kelamin=jenis_kelamin.`id_jenis_kelamin` join status_akun on akun.`status`=status_akun.id_status join `level` on akun.`level`=`level`.`id_level` join instansi on akun.instansi = instansi.id_instansi where `level`.`id_level` = 2 or `level`.`id_level` = 3 ORDER BY `akun`.`nip` asc";
} else {
	if($level=='Pegawai'){
		$sql = "SELECT akun.`nip`, akun.`nama`,jenis_kelamin.`jenis_kelamin`,akun.`kata_sandi`,akun.`tempat_lahir`,akun.`tanggal_lahir`,akun.`alamat_rumah`,akun.`kode_pos`,akun.`nomor_hp`,instansi.`nama_instansi`,instansi.`alamat_instansi`,akun.`ktp_suami`,akun.`ktp_istri`,akun.`foto_3x4`,akun.`tanggal_registrasi`,akun.`foto_profil`,status_akun.`status`,level.`level` FROM `akun` join jenis_kelamin on akun.jenis_kelamin=jenis_kelamin.`id_jenis_kelamin` join status_akun on akun.`status`=status_akun.id_status join `level` on akun.`level`=`level`.`id_level` join instansi on akun.instansi = instansi.id_instansi where `level`.`id_level` = 2 or `level`.`id_level` = 3 ORDER BY `akun`.`nip` asc";
	} else {
		if($level=='Admin'){
			$sql = "SELECT transaksi.id_transaksi, jenis_transaksi.jenis_transaksi, transaksi.tanggal_transaksi, akun.nama, instansi.nama_instansi,status_transaksi.status_transaksi from transaksi join jenis_transaksi on transaksi.jenis_transaksi = jenis_transaksi.id_jenis_transaksi join akun on transaksi.nip = akun.nip join status_transaksi on transaksi.status = status_transaksi.id_status_transaksi join instansi on akun.instansi = instansi.id_instansi";
		}
	}
}
$query = $con->query($sql);
if($query->num_rows == 0) {}
else {
    ?>
	<tr>
		<th class="table-sort" onclick="sortTable(0)">ID Transaksi</th>
		<th class="table-sort" onclick="sortTable(1)">Jenis Transaksi</th>
		<th class="table-sort" onclick="sortTable(2)">Tanggal Transaksi</th>
		<th class="table-sort" onclick="sortTable(3)">Pemohon</th>
		<th class="table-sort" onclick="sortTable(4)">Instansi</th>
		<th class="table-sort">Status</th>
		<th>Aksi</th>
	</tr>
	<?php if(mysqli_num_rows($query)>0) { ?>
	<?php
	while ($data = mysqli_fetch_array($query)) {
		?>
		<tr>
			<td><?php echo $data["id_transaksi"];?></td>
			<td><?php echo $data["jenis_transaksi"];?></td>
			<td><?php echo $data["tanggal_transaksi"];?></td>
			<td><?php echo $data["nama"];?></td>
			<td><?php echo $data["nama_instansi"];?></td>
			<td><?php echo $data["status_transaksi"];?></td>
			<td>
			<div id="aksi">
				<a target="_self" href="../../c/kpri.c.php?action=profile&nip=<?php echo $data["nip"];?>"><img src="../../assets/i/show.png"></a>
				<a target="_self" href="../../c/kpri.c.php?action=profile-update&nip=<?php echo $data["nip"];?>"><img src="../../assets/i/edit.png"></a>
				</div>
			</td>
		</tr>
		<?php }} ?>
    <?php
}
?>