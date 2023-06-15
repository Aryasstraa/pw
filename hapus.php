<?php
include "koneksi.php";
echo $_GET['nim'];
$nim = ($_GET['nim']);
$result= mysqli_query($conn,"DELETE FROM mahasiswa WHERE nim ='$nim'");
echo $result; 
if($result){
    echo"berhasil";
}else{
    echo"gagal";
}
?>
