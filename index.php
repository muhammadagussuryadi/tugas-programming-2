<table width="100%" heigt="100%" border="1">
  <thead>
    <tr height="5%">
      <th>
        <a href="index.php?idMenu=<?php echo base64_encode(1) ?>">Mahasiswa</a>
        <a href="index.php?idMenu=<?php echo base64_encode(2) ?>">Dosen</a>
        <a href="index.php?idMenu=<?php echo base64_encode(2) ?>">Matakuliah</a>
        <a href="index.php?idMenu=<?php echo base64_encode(3) ?>">Nilai</a>
      </th>
    </tr>
  </thead>
  <tbody>
    <tr height="95%">
      <td valign="top" align="center">
        <?php
          $idMenu = ($_GET['idMenu']?base64_decode($_GET['idMenu']):1);
          switch($idMenu){
            case 1:
              include("latihan1.php");
              break;
            case 2:
              include("latihan5.php");
              break;
            case 3:
              include("latihan1.php");
              break;
            case 4:
              include("latihan1.php");
              break;
            default:
              include("latihan1.php");
              break;
          }
        
        ?>
      </td>
    </tr>
  </tbody>
</table>