var a = document.getElementById('nama');
var b = document.getElementById('tempat-lahir');
var c = document.getElementById('alamat-rumah');
var d = document.getElementById('instansi');
var e = document.getElementById('alamat-instansi');

a.addEventListener("input", function() {
    a.value = a.value.toUpperCase();
});
b.addEventListener("input", function() {
    b.value = b.value.toUpperCase();
});
c.addEventListener("input", function() {
    c.value = c.value.toUpperCase();
});
d.addEventListener("input", function() {
    d.value = d.value.toUpperCase();
});
e.addEventListener("input", function() {
    e.value = e.value.toUpperCase();
});