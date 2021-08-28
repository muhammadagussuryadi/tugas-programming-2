<?php
  include "connection.php";
  $db = new Database();
  $cn = $db->connectDb();
  $message = "";
  $id_mahasiswa = ($_GET['id']?base64_decode($_GET["id"]):"");
  if($id_mahasiswa){
    $query = mysqli_query($cn, "DELETE FROM tb_mahasiswa WHERE id_mahasiswa=".$id_mahasiswa);
    if($query){
      echo "<script>alert('data berhasil dihapus');window.location.href='index.php';</script>";
    }else{
      echo "<script>alert('gagal menghapus data');window.location.href='index.php';</script>";
    }
  }else{
    echo "<script>alert('gagal menghapus data');window.location.href='index.php';</script>";
  }
?>