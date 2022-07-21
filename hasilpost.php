<?php 

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "r");

echo "<h2 align=center>Table Guest Book</h2>";
echo "<h4 align=center><a href='tampilan.php'>::Isi buku tamu::</a><h4><br>";

echo "<table border='2' align=center>";
echo "<tr><td>Tanggal</td><td>Nama</td><td>Alamat</td><td>Email</td><td>Status</td><td>Pesan</td><td>Kesan</td>";
while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>" . date("l, j F Y");
    echo "<td>$pisah[0] </td><td>$pisah[1] </td><td>$pisah[2] </td><td>$pisah[3] </td><td>$pisah[4] </td><td>$pisah[5] </td></tr>";
}
echo "</table>";

?>


    
    
    
    
    



