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
    <a href="detailpembelian.php">LAPORAN PEMBELIAN</a>
    <a href="detailpenjualan.php">LAPORAN PENJUALAN</a>
    <a href="detailjualbeli.php">LAPORAN JUAL BELI</a>
    </menu>
    <article>
        <center>
        <h3>Laporan Detail Pembelian</h3> <br><br>
        <?php 
      include 'koneksi.php';
      $mahasiswa = mysqli_query($koneksi, "SELECT * from pembelian");
      foreach ($mahasiswa as $row)
          echo "Nomor Faktur = ";
          echo"$row[nomor_faktur]";
         
      ?><br>
      <?php
      include 'koneksi.php';
      $mahasiswa = mysqli_query($koneksi, "SELECT * from pembelian");
      foreach ($mahasiswa as $row)
            echo "Tanggal Faktur = ";
            echo"$row[tanggal_beli]";
      ?><br>
      <br><br>
          <table border="1">
    <tr><th>NO</th><th>Nama Barang</th><th>Jumlah</th><th>Harga Beli</th><th>Total</th></tr>
    <?php 
      include 'koneksi.php';
      $mahasiswa = mysqli_query($koneksi, "SELECT * from barang");
      $no=1;
      foreach ($mahasiswa as $row){
          echo "<tr>
              <td>$no</td>
              <td>".$row['nama_barang']."</td>
              <td>".$row['harga_jual']."</td>
              <td>".$row['stok']."</td>
                </tr>";
          $no++;
      }
      ?></table><br><br>
        <h2>Laporan Pembelian Barang</h2></center><br><br>
    
    <table border="1">
    <tr><th>NO</th><th>Tanggal </th><th>Nomor Faktur</th><th>Detail</th></tr>
    <?php 
      include 'koneksi.php';
      $mahasiswa = mysqli_query($koneksi, "SELECT * from barang");
      $no=1;
      foreach ($mahasiswa as $row){
          echo "<tr>
              <td>$no</td>
              <td>".$row['nama_barang']."</td>
              <td>".$row['harga_jual']."</td>
              <td>".$row['stok']."</td>
                </tr>";
          $no++;
      }
      ?>
</table>
</article>
<footer>Copyright &copy;2022 Sistem Informasi Manajemen</footer>
</body>
</html>