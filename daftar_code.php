<!--
	code php untuk daftar
-->
<?php
require_once('koneksi.php');
$username = $email = $password = $pwd = '';

$username = $_POST['username'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql = "INSERT INTO user (username,email,password) VALUES ('$username','$email','$password')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: login.html");
}
else
{
	echo "Error :".$sql;
}
?>