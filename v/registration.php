<!DOCTYPE html>
<head>
<?php include('atoms/kpri.atom.head.html'); ?>
</head>
<body>
<div class=registrasi_1_162>
<div class=kolom_header id="kolom_header">

</div>
<div class=form_registrasi_1_169>
<form method="post" action="../m/kpri.model.registration.php" enctype="multipart/form-data">
<div class=form_registrasi_1_1_170>
<div class="form_1_1_171"></div><span  class="text_registrasi_1_172">REGISTRASI</span>
<div class=nama_pengguna_1_173><span  class="nama_1_174">NAMA </span>
<div class="kolom_nama_1_175">
<input class="kpri-input uppercased" id="nama" name="nama" maxlength="50" type="text" required>
</div>
</div>
<div class=kata_sandi_1_176><span  class="kata_sandi_1_177">KATA SANDI</span>
<div class="kolom_kata_sandi_1_178">
<input class="kpri-input rpassword" id="kata-sandi" name="kata-sandi" maxlength="30" type="password" required>
<span class="kpri-sandi">
<a id="tampilkan-sandi" href="#" onclick="rtampilsandi()">
<img id="kpri-logo-password" src="../assets/i/show.png">
</a>
</span>
</div>
</div>
<div class=jenis_kelamin_5_30><span  class="jenis_kelamin_5_31">JENIS KELAMIN</span>
<div class=kelamin_9_41>
<label>
<input type="radio" name="jenis-kelamin" id="laki-laki" class="laki_laki_9_38"  value="1">Laki-laki
</label>
<label>
<input type="radio" name="jenis-kelamin" id="perempuan" class="perempuan_9_39" value="2">Perempuan
</label>
</div>
</div>
<div class=nip_1_179><span  class="nip_1_180">NIP</span>
<div class="kolom_nip_1_181">
<input class="kpri-input" id="nip" name="nip" maxlength="18" type="number"
oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
required>
</div>
</div>
<div class=tempat_lahir_1_182><span  class="tempat_lahir_1_183">TEMPAT LAHIR</span>
<div class="kolom_tempat_lahir_1_184">
<input class="kpri-input uppercased" id="tempat-lahir" name="tempat-lahir" maxlength="30" type="text" required>
</div>
</div>
<div class=tanggal_lahir_1_185><span  class="tanggal_lahir_1_186">TANGGAL LAHIR</span>
<div class="kolom_tanggal_lahir_1_187">
<input class="kpri-input" id="tanggal-lahir" name="tanggal-lahir" type="date" required>
</div>
</div>
<div class=alamat_rumah_5_27><span  class="tanggal_lahir_5_28">ALAMAT RUMAH</span>
<div class="kolom_alamat_rumah_5_29">
<textarea class="uppercased" name="alamat-rumah" id="alamat-rumah" cols="40" rows="5" maxlength="200" required></textarea>
</div>
</div>
</div>
<div class=form_registrasi_2_1_191>
<div class="form_2_1_192"></div>
<div class=kode_pos_5_33>
<div class="kolom_kode_pos_5_20">
<input class="kpri-input" id="kode-pos" name="kode-pos" maxlength="5" type="number" 
oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);
"
required>
</div><span  class="kode_pos_5_19">KODE POS</span>
</div>
<div class=nomor_hp_1_199><span  class="nomer_hp_1_200">NOMOR HP</span>
<div class="kolom_nomer_hp_1_201">
<input class="kpri-input" id="nomor-hp" name="nomor-hp" maxlength="12" type="number" 
oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);
"
required>
</div>
</div>
<div class=nama_instansi_1_196><span  class="nama_instansi_1_197">NAMA INSTANSI</span>
<div class="kolom_nama_instansi_1_198">
<input class="kpri-input uppercased" id="instansi" name="instansi" maxlength="30" type="text" required>
</div>
</div>
<div class=alamat_instansi_1_193><span  class="alamat_instansi_1_194">ALAMAT INSTANSI</span>
<div class="kolom_alamat_instansi_1_195">
<textarea class="kpri-input uppercased" name="alamat-instansi" id="alamat-instansi" cols="40" rows="5" maxlength="200" required></textarea>
</div>
</div>
<div class=foto_ktp_suami_1_202><span  class="text_foto_ktp_suami_1_203">FOTO KTP SUAMI</span>
<div class="kolom_ktp_suami_1_204">
<input class="kpri-input" type="file" name="foto-ktp-suami" id="foto-ktp-suami" required>
</div>
</div>
<div class=foto_ktp_istri_1_205><span  class="foto_ktp_istri_1_206">FOTO KTP ISTRI</span>
<div class="kolom_ktp_istri_1_207">
<input class="kpri-input" type="file" name="foto-ktp-istri" id="foto-ktp-istri" required>
</div>
</div>
<div class=foto_3x4_1_208><span  class="foto_ukuran_3x4_1_209">FOTO UKURAN 3X4</span>
<div class="kolom_ukuran_foto_1_210">
<input class="kpri-input" type="file" name="foto-3x4" id="foto-3x4" required>
</div>
</div>
<span  class="lihat_persyaratan_di_sini_1_218">Lihat persyaratan <a href="#" id="myBtn">di sini</a></span>
<span  class="sudah_punya_akun__masuk_di_sini_1_215">Sudah punya akun? Masuk <a href="../c/kpri.c.php?action=login">di sini</a></span>

<div class=tombol_selanjutnya_1_211>
<div class="tombol_selanjitnya_1_212"></div><span  class="selanjutnya_1_213">SELANJUTNYA</span>
<input type="submit" name="submit" value="registrasi" class="tombol_selanjitnya_1_212">
</div>
</div>
</form>
</div>
</div>

<div id="myModal" class="modal">
<div class="modal-content">
<div class="modal-header">
<span class="close">&times;</span>
<h2>Persyaratan</h2>
</div>
<div class="modal-body">
<img src="../assets/i/syarat.png">
</div>
<div class="modal-footer">
<h3>KPRI Wiyata Usaha</h3>
</div>
</div>
</div>



</body>
<script src="../assets/dist/main-js/jquery-3.3.1.min.js"></script>
<script src="../assets/dist/main-js/kpri-main.js"></script>
<script src="../assets/dist/main-js/kpri-addons.js"></script>
<script src="../assets/dist/page-js/registrasi.js"></script>