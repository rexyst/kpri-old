<?php
require_once('kpri.db.php');
$sql;
if(isset($_GET['id'])){
	$sql = "SELECT 
	peminjaman.id_peminjaman, 
	peminjaman.nip_peminjam, 
	akun.nama, 
	akun.nomor_hp,
	instansi.nama_instansi, 
	peminjaman.bulan, 
	jenis_peminjaman.jenis_peminjaman, 
	peminjaman.jumlah, 
	peminjaman.diangsur, 
	peminjaman.penghasilan, 
	peminjaman.diangsur_mulai, 
	status_pinjaman.status_pinjaman 
	from peminjaman join akun on peminjaman.nip_peminjam = akun.nip join instansi on akun.instansi = instansi.id_instansi join jenis_peminjaman on peminjaman.jenis_peminjaman = jenis_peminjaman.id_jenis_peminjaman join status_pinjaman on peminjaman.status = status_pinjaman.id_status_pinjaman where id_peminjaman = ".$_GET['id'];
	$query = $con->query($sql);
	$hasil = $query->fetch_assoc();
	if($query->num_rows == 0){
		
	} else {
		?>
		
		<div class=kolom_identitas_201_84>
		<div class=nip_201_72><span  class="nip_201_66">NIP</span><span  class="__201_69">: <?php echo $hasil['nip_peminjam']; ?></span>
		<div class="kolom_jumlah_203_7"></div>
		</div>
		<div class=nama_201_78><span  class="nama_201_79">Nama</span><span  class="__201_80">: <?php echo $hasil['nama']; ?></span></div>
		<div class=unit_kerja_201_81><span  class="unit_kerja_201_82">Unit Kerja</span><span  class="__201_83">: <?php echo $hasil['nama_instansi']; ?></span></div>
		<div class=pinjam_bulan_201_73><span  class="pinjam_bulan_201_67">Pinjam Bulan</span><span  class="__201_70">: <?php echo $hasil['bulan']; ?></span>
		<div class="kolom_jumlah_203_12"></div>
		</div>
		<div class=hp_201_74><span  class="hp_201_68">HP</span><span  class="__201_71">: <?php echo $hasil['nomor_hp']; ?></span></div>
		</div>
		<div class=kolom_angsuran_203_6>
		<div class=jumlsh_pinjaman_203_2><span  class="jumlah_pinjaman_201_85">Jumlah Pinjaman</span><span  class="__201_89">: <?php echo $hasil['jumlah']; ?></span>
		<div class="kolom_jumlah_203_21"></div>
		</div>
		<div class=diangsur_203_3><span  class="diangsur_201_86">Diangsur</span><span  class="__201_90">: <?php echo $hasil['diangsur']; ?></span>
		<div class="kolom_jumlah_203_22"></div>
		</div>
		<div class=penghasilan_bersih_203_4><span  class="penghasilan_bersih_201_87">Penghasilan Bersih</span><span  class="__201_91">: <?php echo $hasil['penghasilan']; ?></span>
		<div class="kolom_jumlah_203_23"></div>
		</div>
		<div class=diangsur_mulai_bulan_203_5><span  class="diangsur_mulai_bulan_201_88">Diangsur mulai bulan</span><span  class="__201_92">: <?php echo $hasil['diangsur_mulai']; ?></span>
		<div class="kolom_jumlah_203_24"></div>
		</div>
		</div>
		<div class=jenis_transaksi_203_25>
		<span  class="pinjam_bulan_201_67">Jenis Pinjaman</span><span  class="__201_70">: <?php echo $hasil['jenis_peminjaman']; ?></span>
		</div>
		<div class=tombol_simpan_203_26>
		<div class="tombol_simpan_203_27"></div><span  class="simpan_203_28">SIMPAN</span>
		</div>
		</div>
		
		<?php
	}
}
$jenis;
if(isset($_GET['type'])){
	$jenis = $_GET['type'];
	if ($jenis == 'USP'){
		$sql = "SELECT peminjaman.id_peminjaman, peminjaman.nip_peminjam, akun.nama, instansi.nama_instansi, jenis_peminjaman.jenis_peminjaman, status_pinjaman.status_pinjaman from peminjaman join akun on peminjaman.nip_peminjam = akun.nip join instansi on akun.instansi = instansi.id_instansi join jenis_peminjaman on peminjaman.jenis_peminjaman = jenis_peminjaman.id_jenis_peminjaman join status_pinjaman on peminjaman.status = status_pinjaman.id_status_pinjaman where jenis_peminjaman.jenis_peminjaman = 'USP' order by peminjaman.id_peminjaman ASC";
	} else
	if ($jenis == 'BKE'){
		$sql = "SELECT peminjaman.id_peminjaman, peminjaman.nip_peminjam, akun.nama, instansi.nama_instansi, jenis_peminjaman.jenis_peminjaman, status_pinjaman.status_pinjaman from peminjaman join akun on peminjaman.nip_peminjam = akun.nip join instansi on akun.instansi = instansi.id_instansi join jenis_peminjaman on peminjaman.jenis_peminjaman = jenis_peminjaman.id_jenis_peminjaman join status_pinjaman on peminjaman.status = status_pinjaman.id_status_pinjaman where jenis_peminjaman.jenis_peminjaman = 'BKE' order by peminjaman.id_peminjaman ASC";
	} else 
	if ($jenis == 'Toko'){
		$sql = "SELECT peminjaman.id_peminjaman, peminjaman.nip_peminjam, akun.nama, instansi.nama_instansi, jenis_peminjaman.jenis_peminjaman, status_pinjaman.status_pinjaman from peminjaman join akun on peminjaman.nip_peminjam = akun.nip join instansi on akun.instansi = instansi.id_instansi join jenis_peminjaman on peminjaman.jenis_peminjaman = jenis_peminjaman.id_jenis_peminjaman join status_pinjaman on peminjaman.status = status_pinjaman.id_status_pinjaman where jenis_peminjaman.jenis_peminjaman = 'Toko' order by peminjaman.id_peminjaman ASC";
	} else
	if ($jenis == 'Ekstra'){
		$sql = "SELECT peminjaman.id_peminjaman, peminjaman.nip_peminjam, akun.nama, instansi.nama_instansi, jenis_peminjaman.jenis_peminjaman, status_pinjaman.status_pinjaman from peminjaman join akun on peminjaman.nip_peminjam = akun.nip join instansi on akun.instansi = instansi.id_instansi join jenis_peminjaman on peminjaman.jenis_peminjaman = jenis_peminjaman.id_jenis_peminjaman join status_pinjaman on peminjaman.status = status_pinjaman.id_status_pinjaman where jenis_peminjaman.jenis_peminjaman = 'Ekstra' order by peminjaman.id_peminjaman ASC";
	} else
	if ($jenis == 'Haji'){
		$sql = "SELECT peminjaman.id_peminjaman, peminjaman.nip_peminjam, akun.nama, instansi.nama_instansi, jenis_peminjaman.jenis_peminjaman, status_pinjaman.status_pinjaman from peminjaman join akun on peminjaman.nip_peminjam = akun.nip join instansi on akun.instansi = instansi.id_instansi join jenis_peminjaman on peminjaman.jenis_peminjaman = jenis_peminjaman.id_jenis_peminjaman join status_pinjaman on peminjaman.status = status_pinjaman.id_status_pinjaman where jenis_peminjaman.jenis_peminjaman = 'Haji' order by peminjaman.id_peminjaman ASC";
	} else {
		$sql = "SELECT peminjaman.id_peminjaman, peminjaman.nip_peminjam, akun.nama, instansi.nama_instansi, jenis_peminjaman.jenis_peminjaman, status_pinjaman.status_pinjaman from peminjaman join akun on peminjaman.nip_peminjam = akun.nip join instansi on akun.instansi = instansi.id_instansi join jenis_peminjaman on peminjaman.jenis_peminjaman = jenis_peminjaman.id_jenis_peminjaman join status_pinjaman on peminjaman.status = status_pinjaman.id_status_pinjaman order by peminjaman.id_peminjaman ASC";
	}
	
	$query = $con->query($sql);
	if($query->num_rows == 0) {}
	else {
		?>
		<tr>
		<th class="table-sort" onclick="sortTable(0)">Id Pinjaman</th>
		<th class="table-sort" onclick="sortTable(1)">NIP</th>
		<th class="table-sort" onclick="sortTable(2)">Nama</th>
		<th class="table-sort" onclick="sortTable(3)">Instansi</th>
		<?php 
		if($jenis == 'all') {
			?>
			<th class="table-sort" onclick="sortTable(4)">Jenis</th>
			<th class="table-sort" onclick="sortTable(5)">Status</th>
			<?php
		} else {
			?>
			<th class="table-sort" onclick="sortTable(4)">Status</th>
			<?php
		}
		?>
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
				<?php
				if ($jenis == 'all'){
					?>
					<td><?php echo $data["jenis_peminjaman"];?></td>
					<td><?php echo $data["status_pinjaman"];?></td>
					<?php
				} else {
					?>
					<td><?php echo $data["status_pinjaman"];?></td>
					<?php
				}
				?>
				
				<td>
				<div id="aksi">
				<a target="_self" href="../../c/kpri.c.php?action=pinjaman&id=<?php echo $data["id_peminjaman"];?>"><img src="../../assets/i/show.png"></a>
				</div>
				</td>
				</tr>
				<?php }} ?>
				<?php
			}
			
		}
		?>