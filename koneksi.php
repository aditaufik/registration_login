<!--
koneksi ke database
nama db -> daftar
nama tabel -> user
-->
<?php
$conn = mysqli_connect("localhost","root","","daftar");

if(!$conn)
{
	echo "Database connection failed...";
}
?>