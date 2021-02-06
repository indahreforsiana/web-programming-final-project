<?php
include "konek.php";

$id=$_GET['id'];

$query=mysqli_query($koneksi,"DELETE FROM `Menu` WHERE `Menu`.`id` = '$id'");

if($query){
	echo "<script>alert('Data Terhapus'); window.location='tabelmenu.php';</script> ";
}
else{
	echo "<script>alert('Data Gagal Terhapus'); window.location='tabelmenu.php';</script> ";
}