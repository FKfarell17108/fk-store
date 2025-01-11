<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">

    <!-- SHORCUT ICON START -->
    <link rel="shortcut icon" href="../../assets/images/icon.png" type="image/x-icon">
    <!-- SHORCUT ICON END -->

    <!-- TITLE START -->
    <title>FKStore | Halaman Ubah Profil</title>
    <!-- TITLE END -->

    <!-- CSS FILES START -->
    <link rel="stylesheet" href="../../assets/css/profilestyle.css">
    <!-- CSS FILES END -->
</head>
<body>
    <?php

    include '../../lib/koneksi.php';

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $pdo = $conn->prepare('UPDATE tbl_users SET
                                  fullname = :fullname,
                                  email = :email,
                                  username = :username
                                  WHERE password = :password');

        $updatedata = array(':fullname' => $fullname, ':email' => $email, ':username' => $username,
        ':password' => $password);

        $pdo->execute($updatedata);

      	echo "<script>alert('Profil Berhasil Diubah');</script>";
        echo "</br>";
		echo"<meta http-equiv='refresh' content='1;
			    url=../signout.php'>";
    } catch (PDOexception $e) {
        echo "<script>alert('Gagal mengubah data: " . $e->getMessage() . "');</script>";
      		   die();
    }

    ?>
    
</body>
</html>