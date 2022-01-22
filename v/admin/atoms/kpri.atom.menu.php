<div class=sidebar_131_2>
  <div class="bg_menu_1_257"></div>
  <div class="beranda_1_261 menu">
    <div class="kolom_beranda_1_262"></div><span  class="beranda_1_263" onclick="home()">Beranda</span>
  </div>
  <div class="pegawai_1_264 menu">
    <div class="kolom_pegawai_1_265"></div><span  class="pegawai_1_266" onclick="employee()">Pegawai</span>
  </div>
  <div class="daftar_nasabah_1_258 menu">
    <div class="kolom_daftar_nasabah_1_259"></div><span  class="daftar_nasabah_1_260" onclick="member()">Daftar nasabah</span>
  </div>
  <div class="pinjaman_1_267 menu dropdown">
    <div class="kolom_pinjaman_1_268"></div>
    <span  class="pinjaman_1_269">Pinjaman</span>
    <div class="dropdown-content">
        <span onclick="allPinjaman()">Semua</span>
        <span onclick="bke()">BKE</span>
        <span onclick="usp()">USP</span>
        <span onclick="toko()">Toko</span>
        <span onclick="ekstra()">Ekstra</span>
        <span onclick="haji()">Haji</span>
    </div>
  </div>
  <div class="simpanan_1_270 menu dropdown">
    <div class="kolom_simpanan_1_271"></div>
    <span  class="simpanan_1_272">Simpanan</span>
    <div class="dropdown-content">
        <span>Simpanan Pokok</span>
        <span>Simpanan Wajib</span>
        <span>Simpanan Sukarela</span>
        <span>Tabungan Hari Raya</span>
    </div>
  </div>
  <div class="profil_1_273 menu dropdown">
    <div class="kolom_profil_1_274"></div>
    <span  class="profil_1_275">Profil</span>
    <div class="dropdown-content">
        <span onclick="profile()">Profil</span>
        <span onclick="logout()">Logout</span>
    </div>
  </div>
  <div class=menus_1_276>
    <div class="kolom_menu_1_277"></div><span  class="menu_1_278">Menu</span>
  </div>
  <div class=user_1_279><span  class="selamat_datang_1_280">Selamat datang</span><span  class="admin_1_281"><?php echo $_SESSION['nama']; ?></span></div><span  class="_kpri_wiyata_usaha_2021_1_282">©KPRI-Wiyata Usaha 2021</span>
</div>