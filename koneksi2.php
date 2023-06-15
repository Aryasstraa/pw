<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];

$sql = "insert into mahasiswa values ($nim,$nama,$jk,$alamat);";
echo $sql;

?>