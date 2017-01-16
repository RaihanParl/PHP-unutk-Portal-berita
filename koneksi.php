
<?php  // definisikan koneksi ke database 
$server = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "portalberita";  // Koneksi dan memilih database di server 
$kon=mysql_connect($server,$username,$password) or die(mysql_errno("Koneksi gagal")); mysql_select_db($database) or die(mysql_errno("Database tidak bisa dibuka")); 


?> 