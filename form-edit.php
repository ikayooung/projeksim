<?php
include 'koneksi.php';
$id_barang         = $_GET['id_barang'];
$mahasiswa  = mysqli_query($koneksi, "select * from barang where id_barang='$id_barang'");
$row        = mysqli_fetch_array($mahasiswa);

    return $result;

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<STYle>*{padding: 0;margin: 0;}
body {
    background-image: url(../projeksim/Image/batu.jpg);
    background-size: cover;
}
header{
    width: 1000px;
    background: darkred;
    color: wheat;
    margin: auto;
    padding: 20px;
    text-align: center;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
menu{
    width: 1000px;
    background:black;
    padding: 20px;
    color: darkred;
    margin: auto;
}
menu a{
    color: darkred;
    text-decoration: none;
    margin: 0 20px 0 0;
}
menu a:hover{
    text-decoration: underline;
}
table{
    width: 1000px;
    background-color:#E85EA2 ;
    padding: 20px;
    margin: auto;
}
article h1{
    margin: 0 0 10px 0;
}
article {
    width: 1000px;
    background:whitesmoke ;
    padding: 20px;
    margin: auto;
}
footer {
    width: 1000px;
    background: brown;
    padding: 20px;
    margin: auto;
    text-align: center;
}</STYle>
</head>

<body>
  <header><h1>PENJUALAN</h1></header>
    <menu>
    <a href="index.php">HOME</a>
    <a href="barang.php">BARANG</a>
    <a href="pembelian.php">PEMBELIAN</a>
    <a href="penjualan.php">PENJUALAN</a>
    <a href="detailpembelian.php">DETAIL PEMBELIAN</a>
    <a href="detailpenjualan.php">DETAIL PENJUALAN</a>
    <a href="detailjualbeli.php">DETAIL JUAL BELI</a>
    </menu>
    <article>
    <center>   

    <h3>Barang</h3><br>
        <form method="post" action="edit.php"> 
                <tr><td>Nama Barang </td><td><input type="text" value="<?php echo $row['nama_barang'];?>" name="nama_barang"></td></tr><br><br>
                <tr><td>Harga Jual </td><td><input type="number" name="harga_jual"></td></tr><br><br>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button></td></tr>
        </form>
        <br><br>
      </table>
    </article>
</body>
<footer>Copyright &copy;2021 Sistem Informasi Manajemen</footer>
</html>
