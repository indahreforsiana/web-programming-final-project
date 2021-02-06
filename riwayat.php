<?php
session_start();
if(empty($_SESSION['username']))
{
    header("location:login.php?pesan=belum_login");
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
                        <li class="navbar-text actions"><a href="home1.php">Home</a></li>
                        <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Menu&nbsp;</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="donut.php?kategori=Brownies">Brownies</a><a class="dropdown-item" role="presentation" href="donut.php?kategori=Donut">Donut</a><a class="dropdown-item" role="presentation" href="donut.php?kategori=Birthday">Birthday Cake</a></div>
                        </li>
                        </ul><span class="navbar-text actions"> <a href="riwayat.php" class="login">Purchase History</a><a class="btn btn-light action-button" role="button" href="logout.php">Logout</a></span></div>


    </div>
    </nav>
    </div>
    <div>
        <div class="container" style="padding-top: 50px; margin-top: 100px; margin-bottom: 50px; background-color: #eee ">
            <table class="table table-hover">
  <thead>
    <tr>
     <th scope="col">Cake Name</th>
      <th scope="col">Sending Date</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total Price</th>   
    </tr>
  </thead>
  <tbody>
    <?php 
include "konek.php";
$username =  $_SESSION['username'];
$query = "SELECT m.nama, j.tgl_kirim, j.jumlah, j.total FROM penjualan j INNER JOIN Menu m on j.id=m.id INNER JOIN pelanggan p on j.username=p.username WHERE j.username='$username'";
$sql = mysqli_query($koneksi, $query);

while($data = mysqli_fetch_array($sql)){
    ?>

    <tr>
      <th scope="row"><?php echo $data['nama']; ?></th>
      <td><?php echo $data['tgl_kirim']; ?></td>
      <td><?php echo $data['jumlah']; ?></td>
      <td><?php echo $data['total']; ?></td>
    </tr>
<?php } ?>
     </tbody>
</table>

        </div>
    </div>
    <footer id="myFooter">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-12 col-sm-6 col-md-3">
                    <h1 class="logo" style="margin-top:30px;"><a href="#"><img src="assets/img/Untitled-3.jpg" id="logofooter">&nbsp;</a></h1>
                </div>
                <div class="col-12 col-sm-6 col-md-2">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="donut.php?kategori=Brownies">Brownies</a></li>
                        <li><a href="donut.php?kategori=Donut">Donut<br></a></li>
                        <li><a href="donut.php?kategori=Birthday">Birthday Cake</a></li>
                        <li></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-2">
                    <h5>Visit us</h5>
                    <ul>
                        <li></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#">Tambak Bayan 8A Babarsari Sleman Yogyakarta</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-2">
                    <h5>Contac us</h5>
                    <ul>
                        <li></li>
                        <li></li>
                    </ul>
                    <p>+62858769990</p>
                    <p>bake@gmail.com</p>
                </div>
                <div class="col-md-3 social-networks">
                    <div></div>
                    <h5>Find us</h5><a href="http://www.facebook.co.id" class="facebook"><i class="fa fa-facebook"></i></a><a href="http://www.twitter.com" class="twitter"><i class="fa fa-twitter"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="linkedin"><i class="fa fa-instagram"></i></a></div>
                </div>
                <div class="row footer-copyright">
                <div class="col">
                    <p>© 2018 Copyright Checker's Bakery</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>