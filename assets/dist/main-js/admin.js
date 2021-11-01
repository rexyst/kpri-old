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


