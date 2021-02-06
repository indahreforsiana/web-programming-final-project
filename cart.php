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
  <div class="well well-small" style="padding: 10px; margin-top: : 100px; margin-left: 100px;margin-right: 100px; background-color: #eee">
    <h1>Check Out </h1>
  <hr class="soften"/>  

  <table class="table table-bordered table-condensed">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Cake</th>
                  <th> Date Deadline</th>
                  <th>Unit Price</th>
                  <th>Quantity </th>
                  <th>Total Price </th>
                </tr>
              </thead>
              <form method="post" action="prosesjual.php">
              <tbody>

                        <?php 
                        include "konek.php";
                        $id=$_GET['id'];
                        $jum=$_POST['jumlah'];
                        $username =  $_SESSION['username'];
                        $query = "SELECT * FROM Menu WHERE id='$id'";
                        $sql = mysqli_query($koneksi, $query);

                        $data = mysqli_fetch_array($sql);
                        $total = $jum*$data['harga'];
                          ?>
                <tr>
                  <td><center><img width="200px" height="200px" src="<?php echo $data['gambar'];?>" alt=""></center></td>
                  <td><?php echo $data['nama'];?></td>
                  <td><?php $tgl1 = date("Y/m/d");// pendefinisian tanggal awal
                        $tgl2 = date('m-d-Y', strtotime('+2 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                        echo $tgl2; //print tanggal ?></td>                  
                  <td id="harga"><?php echo $data['harga'];?></</td>
                  <td><?php echo $jum ?></td>
                  <td ><?php echo $total ?></td>
                </tr>
      
                <tr>
                  <td colspan="5" class="alignR">Total Payment: </td>
                  <td > <?php echo $total ?>  </td>
                </tr>     
              </tbody> 
        </table>
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <input type="hidden" name="tgl" value="<?php echo $tgl2;  ?>">
                    <input type="hidden" name="username" value="<?php echo $username; ?>">
                    <input type="hidden" name="jumlah" value="<?php echo $jum; ?>">
                    <input type="hidden" name="total" value="<?php echo $total; ?>">

      </div>
      <div style="padding: 10px; margin: 0 100px; background-color: #eee">
      <div class="row">
        <div class="contact-form col-md-6 " >
              <div class="form-group">
              <input type="text" placeholder="Your Name" class="form-control" name="nama" > 
              </div>
                     <div class="form-group">
                     <input type="text" placeholder="Your Addres" class="form-control" name="alamat" >
                     </div>
                      <div class="form-group">
                        <input type="text" placeholder="Your Telephone Number" class="form-control" name="telpon" id="subject">
                     </div>
                     <div align="left">
                     <h4>BANK TRANSFER ONLY</h4>
                      </div>
                     <div class="form-group" align="left">
                          <input type="radio" name="bank" value="BCA">BCA
                          <input type="radio" name="bank" value="BNI">BNI
                          <input type="radio" name="bank" value="Mandiri">Mandiri
                     </div>
            
                     <div id="cf-submit">
                    <input type="submit" value="Submit" style="background-color: #000; color: #fff; width: 575px; height: 45px">
                    </div>            
            
          </form>
        </div>             
      </div> <!-- end row -->
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
                        <li><a href="#">Brownies</a></li>
                        <li><a href="#">Donut<br></a></li>
                        <li><a href="#">Birthday Cake</a></li>
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
                <<div class="col-md-3 social-networks">
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
  <!--  <script type="text/javascript">
        var jumlah = document.getElementById("jumlah").value;
        var harga = <?php echo $data['harga']; ?>;
                var hasil = jumlah * harga;
                var total = jumlah * harga;
        document.getElementById("hasil").innerHTML = hasil;
        document.getElementById("total").innerHTML = total;
    </script> -->

 <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>