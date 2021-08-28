<?php
  include "connection.php";
  $db = new Database();
  $cn = $db->connectDb();
  $query = mysqli_query($cn, "SELECT * FROM tb_mahasiswa");
?>
<html>
  <head>
    <style>
      .btn-add{
        margin-bottom: 10px;
      }
      table{
        border-collapse: collapse;
      }
      table tr td{
        padding:5px;
      }

    </style>
  </head>
  <body>
  <h1>Daftar Mahasiswa</h1>
    <div>
    <button class="btn-add"><a href="latihan2.php">Tambah Data</a></button>
    <table border="1">
      <thead>
        <tr>
          <th colspan="2" >#</th>
          <th rowspan="2" >NPM</th>
          <th rowspan="2">NAMA</th>
        </tr>
        <tr>
          <th>NO</th>
          <th>ACTION</th>
        </tr>
      </thead>
      <tbody>
      <?php
          $number = 1;
          while($data=mysqli_fetch_array($query)){
            echo "
              <tr>
                <td>".$number."</td>
                <td>
                  <button><a href='latihan4.php?id=".base64_encode($data['id_mahasiswa'])."'>delete</a></button>
                  <button><a href='latihan3.php?id=".base64_encode($data['id_mahasiswa'])."'>update</a></button>
                </td>
                <td>".$data['npm']."</td>
                <td>".$data['nama']."</td>
              </tr>
              ";
              $number++;
          }
        ?>
      </tbody>
    </table>
    </div>
  </body>
</html>
