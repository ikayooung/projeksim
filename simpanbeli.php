<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nomor_faktur            = $_POST['nomor_faktur'];
$tanggal_beli           = $_POST['tanggal_beli'];

// query SQL untuk insert data
$query="INSERT INTO pembelian SET nomor_faktur='$nomor_faktur',tanggal_beli='$tanggal_beli'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:dbeli.php");
?>