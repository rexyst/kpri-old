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


// start modal listener
// start modal ktp suami
var modala = document.getElementById("modal-ktp-suami");

var btna = document.getElementById("ktp-suami-show");

var spana = document.getElementById("closea");

btna.onclick = function() {
  modala.style.display = "block";
}

spana.onclick = function() {
  modala.style.display = "none";
}
// end modal ktp suami

// start modal ktp istri
var modalb = document.getElementById("modal-ktp-istri");

var btnb = document.getElementById("ktp-istri-show");

var spanb = document.getElementById("closeb");

btnb.onclick = function() {
  modalb.style.display = "block";
}

spanb.onclick = function() {
  modalb.style.display = "none";
}
// end modal ktp istri

// start modal 3x4
var modalc = document.getElementById("modal-3x4");

var btnc = document.getElementById("foto-3x4-show");

var spanc = document.getElementById("closec");

btnc.onclick = function() {
  modalc.style.display = "block";
}

spanc.onclick = function() {
  modalc.style.display = "none";
}
// end modal 3x4

window.onclick = function(event) {
  if (event.target == modala) {
    modala.style.display = "none";
  } else if (event.target == modalb) {
    modalb.style.display = "none";
  } else if (event.target == modalc) {
    modalc.style.display = "none";
  } else if (event.target == modalz) {
    modalz.style.display = "none";
  } else if (event.target == modalzz) {
    modalzz.style.display = "none";
  } else if (event.target == modalzzz) {
    modalzzz.style.display = "none";
  } else if (event.target == modalzzzz) {
    modalzzzz.style.display = "none";
  }
}
// end modal listener

function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("tabel-member");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
      first, which contains table headers):*/
      for (i = 1; i < (rows.length - 1); i++) {
        //start by saying there should be no switching:
        shouldSwitch = false;
        /*Get the two elements you want to compare,
        one from current row and one from the next:*/
        x = rows[i].getElementsByTagName("TD")[n];
        y = rows[i + 1].getElementsByTagName("TD")[n];
        /*check if the two rows should switch place,
        based on the direction, asc or desc:*/
        if (n == 0){
          if (dir == "asc") {
            if (Number(x.innerHTML) > Number(y.innerHTML)) {
              shouldSwitch = true;
              break;
            }
          } else if (dir == "desc") {
            if (Number(x.innerHTML) < Number(y.innerHTML)) {
              shouldSwitch = true;
              break;
            }
          }
        } else {
          if (dir == "asc") {
            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
              //if so, mark as a switch and break the loop:
              shouldSwitch= true;
              break;
            }
          } else if (dir == "desc") {
            if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
              //if so, mark as a switch and break the loop:
              shouldSwitch = true;
              break;
            }
          }
        }
      }
      if (shouldSwitch) {
        /*If a switch has been marked, make the switch
        and mark that a switch has been done:*/
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
        //Each time a switch is done, increase this count by 1:
        switchcount ++;      
      } else {
        /*If no switching has been done AND the direction is "asc",
        set the direction to "desc" and run the while loop again.*/
        if (switchcount == 0 && dir == "asc") {
          dir = "desc";
          switching = true;
        }
      }
    }
  }
  
  function ubahFotoProfil(){
    var modalz = document.getElementById("modal-ubah-foto-profil");
    modalz.style.display = "block";
  }
  
  var modalz = document.getElementById("modal-ubah-foto-profil");
  
  var spanz = document.getElementById("closez");
  
  spanz.onclick = function() {
    modalz.style.display = "none";
  }

  function ubahFotoKTPSuami(){
    modala.style.display = "none";
    var modalzz = document.getElementById("modal-ubah-foto-ktp-suami");
    modalzz.style.display = "block";
  }
  
  var modalzz = document.getElementById("modal-ubah-foto-ktp-suami");
  
  var spanzz = document.getElementById("closezz");
  
  spanzz.onclick = function() {
    modalzz.style.display = "none";
  }

  function ubahFotoKTPIstri(){
    modalb.style.display = "none";
    var modalzzz = document.getElementById("modal-ubah-foto-ktp-Istri");
    modalzzz.style.display = "block";
  }
  
  var modalzzz = document.getElementById("modal-ubah-foto-ktp-Istri");
  
  var spanzzz = document.getElementById("closezzz");
  
  spanzzz.onclick = function() {
    modalzzz.style.display = "none";
  }

  function ubahFoto3x4(){
    modalc.style.display = "none";
    var modalzzzz = document.getElementById("modal-ubah-foto-3x4");
    modalzzzz.style.display = "block";
  }
  
  var modalzzzz = document.getElementById("modal-ubah-foto-3x4");
  
  var spanzzzz = document.getElementById("closezzzz");
  
  spanzzzz.onclick = function() {
    modalzzzz.style.display = "none";
  }