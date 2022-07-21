<?php 

$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];
$pesan = $_POST['pesan'];
$kesan = $_POST['kesan'];

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "a+");
fputs($fp, "$nama|$alamat|$email|$status|$pesan|$kesan\n");
fclose($fp);

header("Location: setelah proses.php");
 ?>



