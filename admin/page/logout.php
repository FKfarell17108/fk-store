<?php
  session_start();
  session_destroy();
  echo "<script>alert('Keluar Halaman Admin');window.location='../../index.php'</script>";
?>
