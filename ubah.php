<?php
include "koneksi.php";

$nim = ($_GET['nim']);
$result= mysqli_query($conn,"SELECT * FROM mahasiswa WHERE nim ='$nim'");
$row= mysqli_fetch_assoc($result);
// var_dump($row);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
        <input type="text" name="nim" id="" value="<?php echo $row['nim'];?>"><br><br>
        <input type="text" name="nama" id=""value="<?php echo $row['nama'];?>"><br><br>
        <label for="">Jenis Kelamin</label>
        <select name="jk" id="" value="<?php echo $row['jk'];?>">
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select><br><br>
        <input type="text" name="alamat" id=""value="<?php echo $row['alamat'];?>"><br><br>
        <button type="submit" name="submit">kirim</button>
    </form>
</body>
</html>