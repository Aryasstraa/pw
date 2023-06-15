<?php
include "koneksi.php";
if(isset($_POST["submit"])){
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];

$query="UPDATE mahasiswa SET nim = '$nim',nama='$nama',jk='$jk',alamat='$alamat' WHERE nim = '$nim'";
$result = mysqli_query($conn,$query);

if($result){
    echo"BERHASIL";
 }else{
    echo"gagal";
 }
}

?>