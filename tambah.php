<?php
include "koneksi.php";
if(isset($_POST["submit"])){
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];

$sql = "insert into mahasiswa values ($nim,$nama,$jk,$alamat);";
echo $sql;
echo" <br>";

$result= mysqli_query($conn,"INSERT INTO mahasiswa VALUES ('$nim','$nama','$jk','$alamat')");
 echo $result; 
 echo" <br>";
 echo"Data Disimpan✔";
 echo "<br>";
 if($result){
    echo"BERHASIL";
 }else{
    echo"gagal";
 }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nim" id=""><br><br>
        <input type="text" name="nama" id=""><br><br>
        <label for="">Jenis Kelamin</label>
        <select name="jk" id="">
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select><br><br>
        <input type="text" name="alamat" id=""><br><br>
        <button type="submit" name="submit">kirim</button>
    </form>
     <button><a href="tampil.php">Lihat Data</a></button> 
</body>
</html>