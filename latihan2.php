<?php
  include "connection.php";
  $db = new Database();
  $cn = $db->connectDb();
  if(isset($_POST['submit'])){
    $npm    = $_POST['npm'];
    $nama   = $_POST['nama'];
    $query  = mysqli_query($cn, "insert INTO tb_mahasiswa (`npm`, `nama`) values ('".$npm."', '".$nama."')");
    if($query){
      echo "<script>alert('data berhasil disimpan');window.location.href='index.php';</script>";
    }else{
      echo "<script>alert('gagal menyimpan data');window.location.href='index.php<;/script>";
    }
  }
?>

<html>
  <h1>Tambah Mahasiswa</h1>
  <form action="" method="POST">
    <table >
      <tr>
        <td>NPM</td>
        <td>:</td>
        <td><input type="text" id="npm" name="npm" required=""></td>
      </tr>
      <tr>
        <td>NAMA</td>
        <td>:</td>
        <td><input type="text" id="nama" name="nama" required=""></td>
      </tr>
      <tr>
        <td colspan="2"></td>
        <td><input type="submit" name="submit" value="submit"> | <a href="index.php">Kembali</a></td>
      </tr>
    </table>
  </form>
</html>