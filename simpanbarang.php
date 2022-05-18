<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nama_barang            = $_POST['nama_barang'];
$harga_jual           = $_POST['harga_jual'];

// query SQL untuk insert data
$query="INSERT INTO barang SET nama_barang='$nama_barang',harga_jual='$harga_jual'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:barang.php");
?>
