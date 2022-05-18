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
    <center> <h3>Pembelian Barang</h3><br>
     <a>Nomor Faktur = </a><br>
     <a>Tanggal Faktur = </a><br>
     <a href="editfaktur.php">edit faktur</a><br><br><br>
     <h4>Detail Pembelian</h4>
    <form method="post" action="simpan.php"> 
        <tr><td>Nama Barang </td><td></a><select name="nb" required>
    <?php 
      include 'koneksi.php';
      $sql = mysqli_query($koneksi, "SELECT * from barang");
        while ($data = mysqli_fetch_assoc($sql)){
            echo "<option>
            <td>".$data['nama_barang']."</td>
              </option>";
            
        }
      ?>
      </select></td></tr>
      <table>


                <tr><td>Jumlah </td><td><input type="number" name="harga_jual"></td></tr>
                <tr><td>Harga Beli (Satuan) </td><td><input type="number" name="harga_jual"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>

                </table>
        </form>
        </center>
    </article>
<footer>Copyright &copy;2022 Sistem Informasi Manajemen</footer>
</body>
</html>