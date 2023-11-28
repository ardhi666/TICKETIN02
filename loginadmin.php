<?php
    require 'config/koneksi.php';
    require 'config/functionadmin.php';

    if (isset($_POST["login"])) {
     if (admin($_POST) > 0) {
      echo "<script>
                alert('Berhasil Login Sebagai Admin!!!, jAGA DATA CUSTOMER') ;
                window.location.href = 'admin.php' ;
            </script>";
     } else{
      echo "<script>
                alert('GAGALL LOGIN...ANDA BUKAN Admin!!!') ;
                window.location.href = 'loginadmin.php' ;
            </script>";
     }
    }


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="stylesheet" href="homee.css">

    <title>Login Admin</title>
  </head>
  <body>

    <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-info" style="background: lightblue;">
      <div class="container">
            <a class="navbar-brand" href="#"><i class="fa fa-train" style="color : red;"></i><span class="font-weight-bold text-danger"> TIKET</span>ING</a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
           </button>
       <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav ml-auto d-flex justify-content-end">
          <div class="navbar-nav">
                  <a class="nav-item nav-link" href="home.php">Home</a>
                  <a class="nav-item nav-link" href="#">About Us</a>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    LOGIN
                  </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="logincustom.php">LOGIN SEBAGAI CUSTOMER</a>
                  <a class="dropdown-item" href="loginadmin.php">LOGIN SEBAGAI ADMIN</a>
             </div>
             </li>
              <a class="nav-item nav-link" href="daftarcustom.php">DAFTAR</a>
            </div>
      </div>
    </div>
  </nav>

   <div class="container">
        <div class="row justify-content-center">
           <div class="col-md-4">
            <div class="card mt-5">
             <div class="card-header"><h5 class="text-center font-weight-bold">LOGIN SEBAGAI <span class="font-weight-bold text-danger">ADMIN</span></h5></div>
            <div class="card-body">
            <form action="" method="post">
              
                <div class="form-group mt-3">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username"  id="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <div class="form-group custom-control custom-checkbox mb-2">
                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                    <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                </div>
                <div class="d-grid gap-2 col-md-4 mx-auto mt-3">
                    <button type="submit" class="btn btn-primary" name="login">LOGIN</button>
                </div>
</form>
</div>
</div>
</div>
</div>
</div>
    
        
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>