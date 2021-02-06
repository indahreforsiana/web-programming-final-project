
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
                       <li class="navbar-text actions"><a href="home0.php">Home</a></li>
                        <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Menu&nbsp;</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="menu.php?kategori=Brownies">Brownies</a><a class="dropdown-item" role="presentation" href="menu.php?kategori=Donut">Donut</a><a class="dropdown-item" role="presentation" href="menu.php?kategori=Bitrhday">Birthday Cake</a></div>
                        </li>
                        
                    </ul><span class="navbar-text actions"> <a href="login.php" class="login">Log In</a><a class="btn btn-light action-button" role="button" href="signup.php">Sign Up</a></span></div>
    </div>
    </nav>
    </div>



    <div>
        <div class="container" id="menu">
            <?php
            $kategori = $_GET['kategori'];

             ?>
            <h4><?php echo $kategori; ?></h4> 
                <div class="row">
<?php 
include "konek.php";

$query = "SELECT * FROM Menu WHERE kategori='$kategori'";
$sql = mysqli_query($koneksi, $query);

while ($data = mysqli_fetch_array($sql)) {
    ?>
                <div class="col-3" >
                    <div class="card"><img class="card-img-top w-100 d-block" src="<?php echo $data['gambar']; ?>">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $data['nama']; ?></h4>
                            <p class="deskripsi"><?php echo $data['descri']; ?></p>
                            <p class="card-text">Rp. <?php echo $data['harga'] ?></p>
                            <form method="POST" action="login.php">
                              <button class="btn btn-primary" type="submit" >Buy</button>
                            </form>
                            </div>
                    </div>
                </div>
            <?php } ?>
            </div>
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
                        <li><a href="menu.php?kategori=Brownies">Brownies</a></li>
                        <li><a href="menu.php?kategori=Donut">Donut<br></a></li>
                        <li><a href="menu.php?kategori=Birthday">Birthday Cake</a></li>
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