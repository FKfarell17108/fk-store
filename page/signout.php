<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Konfirmasi Keluar</title>
  <script type="text/javascript">
    function confirmLogout() {
      var response = confirm("Apakah Anda Yakin Ingin Keluar?");
      if (response) {
        // Pengguna memilih 'OK', lanjutkan dengan menghancurkan session
        <?php session_destroy(); ?>
        alert('Anda Telah Keluar');
        window.location = '../index.php';
      } else {
        // Pengguna memilih 'Cancel', kembali ke halaman sebelumnya
        window.history.back();
      }
    }
  </script>
</head>
<body onload="confirmLogout();">
</body>
</html>