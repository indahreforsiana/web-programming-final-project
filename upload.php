<?php
include "konek.php";
$id= $_POST['id'];
//$gambar= $_POST['gambar'];
$nama= $_POST['nama'];
$desc= $_POST['desc'];
$harga= $_POST['harga'];
$kategori= $_POST['kategori'];
$image='gambar/'.$_FILES['foto']['name'];
$image=mysqli_real_escape_string($koneksi,$image);

if(preg_match("!image!", $_FILES['foto']['type'])){
    if(copy($_FILES['foto']['tmp_name'], $image)){
        $sql="INSERT INTO Menu values('$id', '$image', '$nama', '$desc', '$harga','$kategori')";
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



  ?>