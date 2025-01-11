<div id="box">

  <h1>Edit User</h1>
  <!-- code by farell kurniawan -->
  <?php

  include 'koneksi/koneksi.php';

  $id = $_POST['id_user'];
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $pass = $_POST['password'];

  
  try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo = $conn->prepare('UPDATE tbl_users SET
                                  fullname = :fullname,
                                  email = :email,
                                  username = :username,
                                  password = :password
                                  WHERE id_user = :id_user');

    $updatedata = array(
      ':fullname' => $fullname,
      ':email' => $email,
      ':username' => $username,
      ':password' => $pass,
      ':id_user' => $id
    );
    
    $pdo->execute($updatedata);

    echo "<center><img src='img/icons/ceklist.png' width='60'></center>";
    echo "<script>'Profil berhasil diubah';</script>";
    echo "</br>";
    echo "<meta http-equiv='refresh' content='1;
				    url=?page=user'>";

  } catch (PDOexception $e) {
    echo "<script>alert('Gagal mengubah data: " . $e->getMessage() . "'); window.setTimeout(function(){ window.location.href = '?page=user'; }, 2000);</script>";
    die();
  }
  
  
  ?>
  <!-- code by farell kurniawan -->
</div>