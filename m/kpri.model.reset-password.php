<?php

require_once('kpri.db.php');
$sql = "UPDATE `akun` SET `kata_sandi`='123456' WHERE `nip`=".$_GET['nip'];
if ($con->query($sql)) {
    ?>
    <script>
    var z = confirm("Berhasil reset kata sandi. Kata sandi baru adalah 123456.");
  if (z == true) {
    window.open('../c/kpri.c.php?action=profile&nip=<?php echo $_GET['nip'];?>', '_SELF');
  }
  else {
    window.open('../index.php', '_SELF');
  }
    </script>
    <?php
}

?>