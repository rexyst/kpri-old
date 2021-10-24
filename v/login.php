<!DOCTYPE html>
<head>
    <?php include('atoms/kpri.atom.head.html');?>
</head>
<body>
    <div class=login_1_228>
        <div class=kolom_header id="kolom_header">
            
            </div>
            <div class=form_login_1_235>
                <form action="../m/kpri.model.login.php" name="login" onsubmit="loginValidation()" method="POST">
                    <div class="form_login_background_1_236"></div><span  class="masuk_1_237">MASUK</span>
                    <div class=nip_1_238>
                        <div class="kolom_nip_1_239 tooltip">
                            <input class="kpri-input" required name="nip" id="kpri-nip" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="18" placeholder="ex: 194508171998011001">
                            <span class="tooltiptext">Nomor Induk Pegawai Anda</span>
                        </div><span  class="teks_nip_1_240">NIP</span>
                    </div>
                    <div class=kata_sandi_1_241>
                        <div class="kolom_kata_sandi_1_242 tooltip">
                            <input class="kpri-input" required name="sandi" id="kpri-kata-sandi" type="password" placeholder="KATA SANDI">
                            <span class="tooltiptext">Kata sandi Anda</span>
                            <span class="kpri-sandi">
                                <a id="tampilkan-sandi" href="#" onclick="tampilsandi()">
                                    <img id="kpri-logo-password" src="../assets/i/show.png">
                                </a>
                            </span>
                        </div><span  class="teks_kata_sandi_1_243">KATA SANDI</span>
                    </div>
                    <div class=tombol_login_1_244>
                        <div class="rectangle_5_1_245"></div>
                        <span  class="masuk_1_246">MASUK</span>
                        <input type="submit" class="kpri-submit" value="">
                    </div>
                    <div class=teks_belum_punya_akun_1_247>
                        <span  class="belum_punya_akun__registrasi_1_248">
                            Belum punya akun? Registrasi
                        </span>
                        <span  class="di_sini_1_249"><a href="../c/kpri.c.php?action=registration">di sini</a></span>
                    </div>
                </form>
            </div>
        </div>
    </body>
    <script src="../assets/dist/main-js/jquery-3.3.1.min.js"></script>
    <script src="../assets/dist/main-js/kpri-main.js"></script>