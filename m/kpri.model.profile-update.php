<?php
require_once('kpri.db.php');
if(isset($_GET['nip'])){
    $sql = "SELECT 
    akun.nip, akun.nama, akun.jenis_kelamin, akun.tempat_lahir, akun.tanggal_lahir, akun.alamat_rumah, akun.kode_pos, akun.nomor_hp, akun.status, akun.level, instansi.nama_instansi, instansi.alamat_instansi 
    FROM akun join instansi on akun.instansi=instansi.id_instansi where akun.nip = ".$_GET['nip'];
    $query = $con->query($sql);
    if($query->num_rows == 0) {}
    else {
        if(mysqli_num_rows($query)>0) { 
            while ($data = mysqli_fetch_array($query)) {
                if($_SESSION['level'] == "Admin"){
                    $tanggal = DateTime::createFromFormat('d/m/Y', $data['tanggal_lahir'])->format('Y-m-d');
                    ?>
                    <form action="../../m/kpri.model.profile-updater.php?a=3&nip=<?php echo $_GET['nip'];?>" method="post">
                    <div class="ellipse_1_1_181"></div>
                    
                    <div class=kolom_nama_167_20><span  class="nama_167_21">Nama</span><span  class="__167_22">:</span>
                    <div class="kolom_nama_177_2">
                    <input class="kpri-input uppercased" id="nama" name="nama" maxlength="50" type="text" value="<?php echo $data['nama']?>" required>
                    </div>
                    </div>
                    <div class=kolom_nip_165_20><span  class="nip_165_21">NIP</span><span  class="__165_22">:</span>
                    <div class="kolom_nip_177_9">
                    <input class="kpri-input" id="nip" name="nip" maxlength="18" type="number"
                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                    value="<?php echo $data['nip']; ?>"
                    required>
                    </div>
                    </div>
                    <div class=kolom_jenis_kelamin_165_23><span  class="jenis_kelamin_165_24">Jenis Kelamin</span>
                    <label>
                    <input type="radio" <?php if($data['jenis_kelamin'] == 1) {echo 'checked';}?> name="jenis-kelamin" id="laki-laki" class="laki_laki_9_38"  value="1" >Laki-laki
                    </label>
                    <label>
                    <input type="radio" <?php if($data['jenis_kelamin'] == 2) {echo 'checked';}?> name="jenis-kelamin" id="perempuan" class="perempuan_9_39" value="2">Perempuan
                    </label>
                    </div>
                    <div class=kolom_tempat_lahir_165_26><span  class="tempat_lahir_165_27">Tempat Lahir</span><span  class="__165_28">:</span>
                    <div class="kolom_tempat_lahir_177_10">
                    <input class="kpri-input uppercased" id="tempat-lahir" name="tempat-lahir" maxlength="30" type="text" value="<?php echo $data['tempat_lahir']; ?>"required>
                    </div>
                    </div>
                    <div class=kolom_tanggal_lahir_165_29><span  class="tanggal_lahir_165_30">Tanggal Lahir</span><span  class="__165_31">:</span>
                    <div class="kolom_tanggal_lahir_177_11">
                    <input class="kpri-input" id="tanggal-lahir" name="tanggal-lahir" type="date" format="d/m/Y" value="<?php echo $tanggal; ?>" required>
                    </div>
                    </div>
                    <div class=kolom_alamat_rumah_1_194><span  class="alamat_rumah_1_195">Alamat Rumah</span><span  class="__1_196">:</span>
                    <div class="kolom_alamat_rumah_1_221">
                    <textarea class="kpri-input uppercased" name="alamat-rumah" id="alamat-rumah" cols="40" rows="5" maxlength="200" required><?php echo $data['alamat_rumah'] ;?></textarea>
                    </div>
                    </div>
                    <div class=kolom_kode_pos_165_16><span  class="kode_pos_165_17">Kode Pos</span><span  class="__165_18">:</span>
                    <div class="kolom_kode_pos_165_19">
                    <input class="kpri-input" id="kode-pos" name="kode-pos" maxlength="5" type="number" 
                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                    value="<?php echo $data['kode_pos'] ; ?>"
                    required>
                    </div>
                    </div>
                    <div class=kolom_nomor_hp_171_34><span  class="nomor_hp_171_35">Nomor HP</span><span  class="__171_37">:</span>
                    <div class="kolom_nomor_hp_171_38">
                    <input class="kpri-input" id="nomor-hp" name="nomor-hp" maxlength="12" type="number" 
                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                    value="<?php echo $data['nomor_hp'] ; ?>"
                    required>
                    </div>
                    </div>
                    <div class=kolom_nama_instansi_171_48><span  class="nama_instansi_171_49">Nama Instansi</span><span  class="__171_51">:</span>
                    <div class="kolom_nama_isntansi_171_53">
                    <input class="kpri-input uppercased" id="instansi" name="instansi" maxlength="30" type="text" value="<?php echo $data['nama_instansi']; ?>" required>
                    </div>
                    </div>
                    <div class=kolom_alamat_kantor_1_197><span  class="__1_198">:</span><span  class="alamat_instansi_1_199">Alamat Instansi</span>
                    <div class="kolom_alamat_kantor_1_213">
                    <textarea class="kpri-input uppercased" name="alamat-instansi" id="alamat-instansi" cols="40" rows="5" maxlength="200" required><?php echo $data['alamat_instansi']; ?></textarea>
                    </div>
                    </div>
                    <div class=tombol_simpan_184_24>
                    <div class="tombol_simpan_184_25">
                    <input type="submit" name="submit" value="SIMPAN" class="tombol_simpan_184_25">
                    </div>
                    </div>
                    <div class=tombol_kembali_184_27>
                    <div class="tombol_simpan_184_28">
                    <button class="tombol_simpan_184_28" type="button" onclick="window.open('../../c/kpri.c.php?action=profile&nip=<?php echo $_GET['nip'];?>', '_SELF')">KEMBALI</button>
                    </div>
                    </div>
                    </form>
                    <form id="update-level" action="../../m/kpri.model.profile-updater.php?a=1&nip=<?php echo $_GET['nip'];?>" method="post">
                    <div class=ubah_level_184_9>
                    <div class="kolom_level_184_10"></div><span  class="level_184_11">Level</span>
                    <div class="kolom_pilihan_level_184_12">
                    <select class="kolom_pilihan_level_184_12_16" name="level" id="level" onchange="document.getElementById('update-level').submit();">
                    <option value="1" <?php if($data['level'] == 1) {echo 'selected';}?>>Member</option>
                    <option value="2" <?php if($data['level'] == 2) {echo 'selected';}?>>Pimpinan</option>
                    <option value="3" <?php if($data['level'] == 3) {echo 'selected';}?>>Pegawai</option>
                    <option value="4" <?php if($data['level'] == 4) {echo 'selected';}?>>Admin</option>
                    </select>
                    </div>
                    </div>
                    </form>
                    <form id="update-status" action="../../m/kpri.model.profile-updater.php?a=2&nip=<?php echo $_GET['nip'];?>" method="post" onchange="document.getElementById('update-status').submit();"> 
                    <div class=ubah_status_184_15>
                    <div class="kolom_status_184_16"></div><span  class="status_184_17">Status</span>
                    <div class="kolom_pilihan_status_184_18">
                    <select class="kolom_pilihan_status_184_18_16" name="status" id="status">
                    <option value="1" <?php if($data['status'] == 1) {echo 'selected';}?>>AKTIF</option>
                    <option value="2" <?php if($data['status'] == 2) {echo 'selected';}?>>NON-AKTIF</option>
                    </select>
                    </div>
                    </div>
                    </form>
                    
                    <?php }
                }
            }
        }
    }
    ?>