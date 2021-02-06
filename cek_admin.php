<?php
session_start();
$query=new mysqli('localhost', 'root', '', 'bakery');
$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($query, "SELECT * FROM admin WHERE admin='$username' and pass='$password'")
		or die(mysqli_error($query));

$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:input.php");
} else {
	header("location:loginadmin.php?pesan=gagal");
}
?>