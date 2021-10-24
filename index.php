<?php
   session_start();
   session_destroy();
   header('location:c/kpri.c.php?action=login'); 
?>