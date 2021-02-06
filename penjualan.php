<?php
session_start();
if(empty($_SESSION['username']))
{
    header("location:loginadmin.php?pesan=belum_login");
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bakery</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Footer-Big-Logo.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button" style="height:58px;">
            <div class="container"><a class="navbar-brand" href="#"><img src="assets/img/logo.jpg" id="logo">CHEKHER'S BAKERY</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Menu&nbsp;</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="input.php">Add Menu</a><a class="dropdown-item" role="presentation" href="tabelmenu.php">Menu</a></div>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#"></a></li>
                    </ul><span class="navbar-text actions"> <a href="penjualan.php" class="login">Data Penjualan</a><a class="btn btn-light action-button" role="button" href="#">Logout</a></span></div>
    </div>
    </nav>
    </div>
    <div style="height: auto;  width: auto; background-color: #DEB887; border-top-left-radius: 60px; border-top-right-radius: 60px; padding-left:  50px;" class="form-input">
<table class="table table-hover table-dark" >
  <thead>
    <tr>
      <th scope="col">Sending Date</th>
      <th scope="col">ID Product</th>
      <th scope="col">Customer </th>
      <th scope="col">Quantity </th>
      <th scope="col">Total Price </th>
      <th scope="col">Bank </th>
      <th scope="col">Address </th>
      <th scope="col">Customer Name </th>
      <th colspan="2">Option</th>
    </tr>
  </thead>
  <tbody>
     <?php 
include "konek.php";

$query = "SELECT * FROM penjualan";
$sql = mysqli_query($koneksi, $query);

while ($data = mysqli_fetch_array($sql)) {
    ?>
    <tr>
      <th scope="row"><?php echo $data['tgl_kirim'];  ?></th>
      <td><?php echo $data['id'];  ?></td>
      <td><?php echo $data['username'];  ?></td>
      <td><?php echo $data['jumlah'];  ?></td>
      <td><?php echo $data['total'];  ?></td>
      <td><?php echo $data['bank'];  ?></td>
      <td><?php echo $data['alamat'];  ?></td>
      <td><?php echo $data['nama'];  ?></td>
       <td><a href= "hapus.php?no=<?php echo $data['id']?>"> Hapus </a></td>   
     
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>