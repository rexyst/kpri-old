function tampilsandi(){
    var a = document.getElementById("tampilkan-sandi");
    var b = document.getElementById("kpri-kata-sandi");
    var c = document.getElementById("kpri-logo-password");
    a.setAttribute("id", "sembunyikan-sandi");
    a.setAttribute("onclick", "sembunyisandi()");
    b.setAttribute("type", "text");
    c.setAttribute("src", "../assets/i/hide.png");
};

function sembunyisandi(){
    var a = document.getElementById("sembunyikan-sandi");
    var b = document.getElementById("kpri-kata-sandi");
    var c = document.getElementById("kprilogo-password");
    a.setAttribute("id", "tampilkan-sandi");
    a.setAttribute("onclick", "tampilsandi()")
    b.setAttribute("type", "password");
    c.setAttribute("src", "../assets/i/show.png");
};

function rtampilsandi(){
    var a = document.getElementById("tampilkan-sandi");
    var b = document.getElementById("kata-sandi");
    var c = document.getElementById("kpri-logo-password");
    a.setAttribute("id", "sembunyikan-sandi");
    a.setAttribute("onclick", "rsembunyisandi()");
    b.setAttribute("type", "text");
    c.setAttribute("src", "../assets/i/hide.png");
};

function rsembunyisandi(){
    var a = document.getElementById("sembunyikan-sandi");
    var b = document.getElementById("kata-sandi");
    var c = document.getElementById("kpri-logo-password");
    a.setAttribute("id", "tampilkan-sandi");
    a.setAttribute("onclick", "rtampilsandi()")
    b.setAttribute("type", "password");
    c.setAttribute("src", "../assets/i/show.png");
};

function home(){
    window.open('../../c/kpri.c.php?action=home', '_SELF');
};

var header = document.getElementById('kolom_header');
var headercon = `
<div class="koperasi_indonesia_logo_4a2e56cea6_seeklogo_2_1_230"></div>
<span  class="koperasi_pegawai_republik_indonesia_1_231">KOPERASI PEGAWAI REPUBLIK INDONESIA</span>
<span  class="wiyata_usaha_1_232">WIYATA USAHA</span>
<span  class="jl__krakatau_no_216__kencong__kabupaten_jember__jawa_timur_68167_telepon___0336__321386_1_233">
    Jl. Krakatau No.216, Kencong, Kabupaten Jember, Jawa Timur 68167
    Telepon: (0336) 321386</span>
    <div class="rectangle_7_1_234"></div>
`;
header.innerHTML = headercon;

function logout(){
    window.open('../../index.php', '_SELF');
}