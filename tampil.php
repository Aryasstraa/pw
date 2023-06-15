<?php include "koneksi.php";
session_start();
echo $_SESSION['username']." - ".$_SESSION['hak'];
if($_SESSION['hak']!= 'admin'){
    $_SESSION["status"] = 'tidakboleh';
    header("Location: /web");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
        border-collapse: collapse;
        width:50%;
    }

    td,
    th {
        text-align: center;
        height: 30px;
        border: 1px solid;
    }
     a{
      text-decoration:none;
    }
    </style>
</head>
<body>
<table>
  <tr style="background-color:blue; color:white">
    <th>NIM</th>
    <th>NAMA</th>
    <th>jenis kelamin</th>
    <th>Alamat</th>
    <th>Hapus</th>
    <th>Ubah</th>
  </tr>
  <?php
    $sql = "SELECT * FROM mahasiswa";
    $result = mysqli_query($conn,$sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row["nim"]."</td>";
        echo "<td>".$row["nama"]."</td>";
        echo "<td>".$row["jk"]."</td>";
        echo "<td>".$row["alamat"]."</td>";
        echo "<td><a href =\"hapus.php?nim=".$row["nim"]."\">Hapus</a></td>";
        echo "<td><a href =\"ubah.php?nim=".$row["nim"]."\">Ubah</a></td>";
        echo "</tr>";
      }
    } else {
      echo "0 results";
    }
?>
</table>
<div>
     <button><a href="tambah.php">Kembali</a></button> 
</div>
</body>
</html>