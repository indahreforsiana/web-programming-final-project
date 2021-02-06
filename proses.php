<?php
include "konek.php";
$id= $_POST['id'];
$gambar= $_POST['foto'];
$nama= $_POST['nama'];
$desc= $_POST['desc'];
$harga= $_POST['harga'];
$kategori= $_POST['kategori'];

$query =mysqli_query($koneksi,"Insert into Menu values('$id', '$gambar', '$nama', '$desc', '$harga','$kategori')") or die(mysqli_error($koneksi));

	if($query){
	echo "<script>alert('Data Tersimpan'); window.location='input.php'</script>";

}
else{ echo "<script>alert('Data Tidak Tersimpan')</script>";}


  ?>