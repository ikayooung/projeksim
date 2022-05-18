
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
}
button {
    background-color:violet;
}
</STYle>
</head>

<body>
  <header><h1>PENJUALAN</h1></header>
    <menu>
    <a href="index.php">HOME</a>
    <a href="barang.php">BARANG</a>
    <a href="pembelian.php">PEMBELIAN</a>
    <a href="penjualan.php">PENJUALAN</a>
    <a href="detailpembelian.php">LAPORAN PEMBELIAN</a>
    <a href="detailpenjualan.php">LAPORAN PENJUALAN</a>
    <a href="detailjualbeli.php">LAPORAN JUAL BELI</a>
    </menu>
    <article>
    <center>   

    <h3>Barang</h3><br>
    <table>
        <form method="post" action="simpanbarang.php"> 
                <tr><td>Nama Barang </td><td><input type="text" name="nama_barang" size="20"></td></tr>
                <tr><td>Harga Jual </td><td><input type="number" name="harga_jual" size="20"></td></tr>
                <tr><td colspan="2"><center> <button type="submit" value="simpan">SIMPAN</button></center> </td></tr>
        </form></table>
        <br><br>
    <table border="1" width="1000px" padding=" 20px">
    <tr><th>NO</th><th>Nama Barang</th><th>Harga Jual</th><th>Stok</th><th>Aksi</th></tr>
    <?php 
      include 'koneksi.php';
      $mahasiswa = mysqli_query($koneksi, "SELECT * from barang");
      $no=1;
      foreach ($mahasiswa as $row){
          echo "<tr>
              <td><center>$no</center></td>
              <td>".$row['nama_barang']."</td>
              <td>".$row['harga_jual']."</td>
              <td>".$row['stok']."</td>
              <td><center><a href='form-edit.php?id_barang=$row[id_barang]'>Edit</a> 
              ||
                    <a href='delete.php?id_barang=$row[id_barang]'>Hapus</a></center>
              </td>
                </tr>";
          $no++;
      }
      
      ?>
      </table>
    </article>
</body>
<footer>Copyright &copy;2022 Sistem Informasi Manajemen</footer>
</html>
