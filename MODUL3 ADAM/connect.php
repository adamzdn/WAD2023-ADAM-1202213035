<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->

<?php  

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "modul3_wad";

$connect  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$connect) {
	echo "Connection failed!";
}
?>