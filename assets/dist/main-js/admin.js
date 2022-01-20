var a = document.getElementById('foto-profil');
var b = document.getElementById('kpri-ubah-foto-profil');
a.onmouseover = function(){
    b.style.display = 'inline';
};
b.onmouseover = function(){
    b.style.display = 'inline';
};
b.onmouseout = function(){
    b.style.display = 'none';
};

function profile(){
    window.open('../../c/kpri.c.php?action=profile', '_SELF');
}

function member(){
    window.open('../../c/kpri.c.php?action=member', '_SELF');
}

function employee(){
    window.open('../../c/kpri.c.php?action=employee', '_SELF');
}

function bke(){
    window.open('../../c/kpri.c.php?action=bke', '_SELF');
}

function usp(){
    window.open('../../c/kpri.c.php?action=usp', '_SELF');
}

function toko(){
    window.open('../../c/kpri.c.php?action=toko', '_SELF');
}

function ekstra(){
    window.open('../../c/kpri.c.php?action=ekstra', '_SELF');
}

function haji(){
    window.open('../../c/kpri.c.php?action=haji', '_SELF');
}

function ubahsandi(){
    var moda = document.getElementById('modal-ubah-sandi');
    moda.style.display = 'block';
}

var moda = document.getElementById("modal-ubah-sandi");

var spanmoda = document.getElementById("closesandi");

spanmoda.onclick = function() {
  moda.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == moda) {
      moda.style.display = "none";
    }
  }

function resetsandi(){
    window.open('../../m/kpri.model.profile-updater.php?a=10');
}