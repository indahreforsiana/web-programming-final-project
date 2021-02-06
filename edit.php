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
    <div style="height: 450px;  width: auto; background-color: #DEB887; border-top-left-radius: 60px; border-top-right-radius: 60px; padding-left: 10px"  class="form-input">

            <center>
              <h2>Input Menu</h2>

        <form method="POST" action="update.php" enctype="multipart/form-data">
          <table>
            <?php
      include 'konek.php';
      $id=$_GET['id'];
      $query=mysqli_query($koneksi, "select * from Menu where id='$id'");
    $data=mysqli_fetch_array($query);
      ?>

            <tr>
              <td>ID Product</td>
              <td></td>
              <td><input type="text" name="id" value="<?php echo $data['id']; ?>"></td>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr>
              <td>Picture</td>
              <td></td>
              <td><input type="file" name="foto" value="<?php echo $data['gambar']; ?>"></td>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr>
                <tr>
              <td>Cake Name</td>
              <td>  </td>
              <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr>
              <td>Description</td>
              <td></td>
              <td><input type="text" name="desc" value="<?php echo $data['descri']; ?>"></td>
            </tr>
            <tr>
              <td></td>
            </tr>
                <tr>
              <td>Price</td>
              <td></td>
              <td><input type="text" name="harga" value="<?php echo $data['harga']; ?>"></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Category</td>
              <td></td>
              <td><select name="kategori" >
                <option value="Brownies"> Brownies </option>
                <option value="Donut"> Donut </option>
                <option value="Birthday"> Birthday Cake </option>    
          </select>
            </td>
            </tr>
            <tr>
              <td></td>
            </tr>
        <tr>            
            
              <td></td>
              <td><input type="Submit" name="Submit" value="Submit"></td>
            </tr>

          </table>

        </form>
        </center>

    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>