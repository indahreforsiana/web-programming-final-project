<?php
include "konek.php";
	$id= $_POST['id'];
	$nama= $_POST['nama'];
	$desc= $_POST['desc'];
	$harga= $_POST['harga'];
	$kategori= $_POST['kategori'];
	$image='gambar/'.$_FILES['foto']['name'];
	$image=mysqli_real_escape_string($koneksi,$image);

if(preg_match("!image!", $_FILES['foto']['type'])){
    if(copy($_FILES['foto']['tmp_name'], $image)){
        $sql="UPDATE Menu SET id='$id', gambar='$image', nama='$nama', descri='$desc', harga='$harga',kategori='$kategori' where id='$id'";
        if(mysqli_query($koneksi,$sql)){
           // $result="Berhasil";
            echo "<script>alert('Data Tersimpan'); window.location='input.php'</script>";
        }
        else{
            //$result="gagal";
            echo "<script>alert('Data Tidak Tersimpan')</script>";
        }
    }
    else{
       // $result="gagal upload";
        echo "<script>alert('Data Tidak Tersimpan')</script>";
    }
}
else{
    //$result="only upload jpg";
    echo "<script>alert('Only Upload Photos!')</script>";
}

mysqli_close($koneksi);

