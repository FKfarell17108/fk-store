<?php

  if (isset($_GET['page'])) $page=$_GET['page'];
  else $page="display";

  if ($page == "display") include("page/display.php");

  elseif ($page == "tentang") include("page/tentang.php");
  // elseif ($page == "data_barang") include("page/data_barang.php");
  // elseif ($page == "data_entry") include("page/data_entry.php");
  elseif ($page == "login") include("page/login.php");
 //---------------------------- USER ---------------------------
  elseif ($page == "belanja") include("page/user/belanja.php");
  elseif ($page == "belanja_detail") include("page/user/belanja_detail.php");
  elseif ($page == "belanja_detailpro") include("page/user/belanja_detailpro.php");
  elseif ($page == "keranjang_hapus") include("page/user/keranjang_hapus.php");
  // elseif ($page == "pesanan") include("page/user/pesanan.php");
  elseif ($page == "profil") include("page/user/profil/profil.php");
  elseif ($page == "profil_ubah") include("page/user/profil/profil_ubah.php");
  elseif ($page == "profil_ubahpro") include("page/user/profil/profil_ubahpro.php");

//---------------------------- ADMIN ---------------------------
// Produk
  elseif ($page == "produk") include("page/admin/produk/produk.php");
  elseif ($page == "tambah_produk") include("page/admin/produk/tambah_produk.php");
  elseif ($page == "tambah_produkpro") include("page/admin/produk/tambah_produkpro.php");
  elseif ($page == "edit_produk") include("page/admin/produk/edit_produk.php");
  elseif ($page == "edit_produkpro") include("page/admin/produk/edit_produkpro.php");
  elseif ($page == "hapus_produk") include("page/admin/produk/hapus_produk.php");

  // Pesanan
  elseif ($page == "pesanan") include("page/admin/pesanan/pesanan.php");
  elseif ($page == "pesanan_detail") include("page/admin/pesanan/pesanan_detail.php");

  // Users
  elseif ($page == "user") include("page/admin/user/user.php");
  elseif ($page == "user_edit") include("page/admin/user/user_edit.php");
  elseif ($page == "user_editpro") include("page/admin/user/user_editpro.php");
  elseif ($page == "user_hapus") include("page/admin/user/user_hapus.php");

  // Pesan
  elseif ($page == "pesan") include("page/admin/pesan/pesan.php");

  // Langganan
  elseif ($page == "langganan") include("page/admin/langganan/langganan.php");

  // Bantuan
  elseif ($page == "bantuan") include("page/admin/bantuan/bantuan.php");

  // Pengiriman
  elseif ($page == "pengiriman") include("page/admin/pengiriman/pengiriman.php");

  // Keranjang
  elseif ($page == "keranjang") include("page/admin/keranjang/keranjang.php");

else echo"Data Tidak Ditemukan";

?>
