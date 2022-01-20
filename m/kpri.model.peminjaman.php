<?php
require_once('kpri.db.php');
$sql = "SELECT peminjaman.id_peminjaman, peminjaman.nip_peminjam, akun.nama, instansi.nama_instansi, jenis_peminjaman.jenis_peminjaman, status_pinjaman.status_pinjaman from peminjaman join akun on peminjaman.nip_peminjam = akun.nip join instansi on akun.instansi = instansi.id_instansi join jenis_peminjaman on peminjaman.jenis_peminjaman = jenis_peminjaman.id_jenis_peminjaman join status_pinjaman on peminjaman.status = status_pinjaman.id_status_pinjaman where jenis_peminjaman.jenis_peminjaman = 'BKE' order by peminjaman.id_peminjaman ASC";
$query = $con->query($sql);
if($query->num_rows == 0) {}
else {
    ?>
    <table id="tabel-member" cellpadding="5" cellspacing="0">
	<tr>
		<th class="table-sort" onclick="sortTable(0)">Id Pinjaman</th>
		<th class="table-sort" onclick="sortTable(1)">NIP</th>
		<th class="table-sort" onclick="sortTable(2)">Nama</th>
		<th class="table-sort" onclick="sortTable(3)">Instansi</th>
		<th class="table-sort" onclick="sortTable(4)">Status</th>
		<th>Aksi</th>
	</tr>
	<?php if(mysqli_num_rows($query)>0) { ?>
	<?php
	while ($data = mysqli_fetch_array($query)) {
		?>
		<tr>
			<td><?php echo $data["id_peminjaman"];?></td>
			<td><?php echo $data["nip_peminjam"];?></td>
			<td><?php echo $data["nama"];?></td>
			<td><?php echo $data["nama_instansi"];?></td>
			<td><?php echo $data["status_pinjaman"];?></td>
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
?>