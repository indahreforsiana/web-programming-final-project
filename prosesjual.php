<?php
include "konek.php";
$id= $_POST['id'];
$tgl = $_POST['tgl2'];
//$tgl = date('Y-m-d', strtotime($tgl));
$tgl1 = date("Y/m/d");// pendefinisian tanggal awal
$tgl2 = date('Y-m-d', strtotime('+2 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
$username = $_POST['username'];
$jumlah= $_POST['jumlah'];
$total= $_POST['total'];
$bank = $_POST['bank'];
$alamat = $_POST['alamat'];
$nama = $_POST['nama'];
$telpon = $_POST['telpon'];

$query =mysqli_query($koneksi,"INSERT into penjualan values('$tgl2', '$id', '$username', '$jumlah', '$total','$bank','$alamat','$nama','$telpon')") or die(mysqli_error($koneksi));

	if($query){
	echo "<script>alert('Pesanan Disimpan'); window.location='riwayat.php'</script>";

}
else{ echo "<script>alert('Pesanan Tidak Tersimpan')</script>";}


  ?>