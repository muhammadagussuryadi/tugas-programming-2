<?php
  include "connection.php";
  $db = new Database();
  $cn = $db->connectDb();
  $id_mahasiswa = ($_GET["id"]?base64_decode($_GET["id"]):"");
  if($id_mahasiswa){
    $query = mysqli_query($cn, "SELECT * FROM tb_mahasiswa WHERE id_mahasiswa=".$id_mahasiswa);
    while($data = mysqli_fetch_array($query)){
        $npm = $data['npm'];
        $nama = $data['nama'];
      }
  }else{
    echo "<script>alert('data tidak ditemukan');window.location.href='index.php';</script>";
  }
  if(isset($_POST['submit'])){
    $npm    = $_POST['npm'];
    $nama   = $_POST['nama'];
    $query  = mysqli_query($cn, "UPDATE tb_mahasiswa SET `npm`='".$npm."', `nama`='".$nama."' WHERE id_mahasiswa=".$id_mahasiswa);
    if($query){
      echo "<script>alert('data berhasil diupdate');window.location.href='index.php';</script>";
    }else{
      echo "<script>alert('gagal mengupdate data');window.location.href='index.php<;/script>";
    }
  }
?>

<html>
<h1>Update Data Mahasiswa</h1>
  <form action="" method="POST">
    <table>
      <tr>
        <td>NPM</td>
        <td>:</td>
        <td><input type="text" id="npm" name="npm" required="" value="<?php echo $npm?>"></td>
      </tr>
      <tr>
        <td>NAMA</td>
        <td>:</td>
        <td><input type="text" id="nama" name="nama" required="" value="<?php echo $nama?>"></td>
      </tr>
      <tr>
        <td colspan="2"></td>
        <td><input type="submit" name="submit" value="submit"> | <a href="index.php">Kembali</a></td>
      </tr>
    </table>
  </form>
</html>