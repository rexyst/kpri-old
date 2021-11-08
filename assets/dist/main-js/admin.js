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
    window.open('../../')
}