<div id="box">

  <?php
  include "koneksi/koneksi.php";

  $id = $_GET['id'];
  $result = $conn->prepare("SELECT * FROM tbl_users WHERE id_user =:id");
  $result->bindparam(':id', $id);
  $result->execute();
  $row = $result->fetch(PDO::FETCH_OBJ);
  ?>

  <h1>Edit Users</h1>

  <form name="edit" method="post" action="?page=user_editpro" enctype="multipart/form-data">

    <table class="article table-style">
      <tr>
        <td>Id User</td>
        <td>
          <input type="button" name="id_user" value="<?php echo $row->id_user ?>">
        </td>
      </tr>
      <tr>
        <td>Fullname</td>
        <td>
          <input type="hidden" name="id_user" value="<?php echo $row->id_user ?>">
          <input type="text" name="fullname" size="40" value="<?php echo $row->fullname ?>" required>
        </td>
      </tr>

      <tr>
        <td>Email</td>
        <td>
          <input type="text" name="email" size="30" value="<?php echo $row->email ?>" required>
        </td>
      </tr>

      <tr>
        <td>Alamat</td>
        <td>
          <input type="text" name="alamat" size="30" value="<?php echo $row->alamat ?>" required>
        </td>
      </tr>

      <tr>
        <td>No Telepon</td>
        <td>
          <input type="text" name="nomor_telepon" size="30" value="<?php echo $row->nomor_telepon ?>" required>
        </td>
      </tr>

      <tr>
        <td>Username</td>
        <td>
          <input type="text" name="username" maxlength="6" value="<?php echo $row->username ?>" required>
        </td>
      </tr>

      <tr>
        <td>Password</td>
        <td>
          <input type="text" name="password" maxlength="6" value="<?php echo $row->password ?>" required>
        </td>
      </tr>

      <tr>
        <td></td>
        <td>
          <input class="tombol-biru" type="submit" name="edit" value="Ubah & Simpan">
          <a class="tombol-merah" href="?page=user">Tutup</a>
        </td>
      </tr>
    </table>

  </form>

</div>

<style>
  /* Tambahkan ini di file CSS Anda atau dalam tag <style> di header HTML */

  /* Style umum untuk tabel */
  .table-style {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    font-size: 0.9em;
    font-family: 'Poppins', sans-serif;
    min-width: 400px;
  }

  .table-style th,
  .table-style td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #dddddd;
  }

  .table-style th {
    background-color: #2a2a2a;
    color: #ffffff;
    text-transform: uppercase;
  }

  .table-style tr:last-of-type {
    border-bottom: 2px solid #2a2a2a;
  }

  /* Animasi untuk hover pada baris */
  .table-style tr {
    transition: background-color 0.3s ease;
  }

  .table-style tr:hover {
    background-color: #f1f1f1;
  }

  /* Tombol dengan style dan animasi */
  .tombol-biru,
  .tombol-merah {
    background-color: #fff;
    color: #2a2a2a;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s, transform 0.3s;
    display: inline-block;
    font-weight: bold;
    box-shadow: 0 2px 2px #2a2a2a;
  }

  .tombol-biru {
    background-color: #fff;
  }

  .tombol-biru:hover {
    background-color: #2a2a2a;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 4px 4px #2a2a2a;
  }

  .tombol-merah {
    background-color: #fff;
  }

  .tombol-merah:hover {
    background-color: #2a2a2a;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 4px 4px #2a2a2a;
  }
</style>