<?php

include "koneksi.php";
$user = $_POST['username'];
$pass = $_POST['password'];
$sql = "SELECT * FROM pengguna where username='$user' and `password`='$pass'";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

if(isset($row['hak'])){
    $_SESSION["status"] = 'ok';
    $_SESSION['username'] = $row['username'];
    $_SESSION['username'] = $row['hak'];
    header ("Location: tampil.php");
}else{
    $_SESSION["status"] = 'error';
    header ("Location: /web");
    echo "gagal";
}

?>