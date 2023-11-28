<?php
    require 'config/tiketion.php' ;
    require 'config/koneksi.php' ;

    $result = read("SELECT * FROM rute");



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Ruang Customer</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="" rel="stylesheet">
  </head>
  <body>

  <body style="overflow-x: hidden;">

      <!--Side Bar -->

    <div class="row">
      <div class="col-md-2" style="height: 900px;">
        <aside class="bg-info h-100">
          <div class="text-center">
          <img src="img/user.png" alt="username" class="mt-5" style="width: 40%;">
          <p class="text-white mt-2">Customer</p>
        </div>
        <div class="list-group list-group-flush mt-5" style="font-size: 16px;">
          <a href="datapesan.php" class="list-group-item list-group-item-action border-0 bg-info text-white" >
          <i class="fas fa-table">
              <span class="pl-1 font-weight-bold">Data Rute</span>
            </i>
          </a>
          <a href="reservation.php" class="list-group-item list-group-item-action border-0 bg-info text-white">
            <i class="fas fa-running">
              <span class="pl-1 font-weight-bold">Reservation</span>
            </i>
             <a href="sidekereta.php" class="list-group-item list-group-item-action border-0 bg-info text-white">
            <i class="fas fa-train">
              <span class="pl-1 font-weight-bold">Nama Kereta</span>
            </i>
          </a>
          </a>
        </div>
      </aside>
    </div>

    <!--Navbar and content-->
    <div class="col-md-10">
      <nav class="navbar navbar-expand-sm navbar-light border-bottom">
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
          aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!--seacrh bar-->
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2 pr-5 pl-3" type="text" placeholder="Search">
          <button class="btn btn-info my-2 my-sm-0 text-white" type="submit">Search</button>
        </form>
         <!--icons-->
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item pr-2">
              <a class="nav-link" href="#">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </a>
            </li>
            <li class="nav-item pr-1">
              <a class="nav-link" href="#">
                <i class="fa fa-bell" aria-hidden="true"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="loginadmin.php">
                <i class="fa fa-share-square" aria-hidden="true">
                  <span class="ml-1">Logout</span>
                </i>
              </a>
            </li>
          </ul>
        </div>
      </nav>
          
        
        <div class="content mt-5 pt-4 text-center">
            <h3 class=""> DATA RUTE TIKET YANG DIPESAN<span class="text-info"></span></h3>
        </div>
              <table class="table table-striped table-hover table-sm table-bordered text-center mt-4">
               <thead class="table bg-info">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal Berangkat</th>
                  <th>Berangkat Dari</th>
                  <th>Ke</th>
                  <th>Harga</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $i = 1;
                  //while ($data = mysqli_fetch_assoc($result)) :
                  foreach ($result as $data) :
                    
                ?>
                <tr>
                  <td><?= $i; ?></td>
                  <td><?= $data["depart_at"]; ?></td>
                  <td><?= $data["rute_from"]; ?></td>
                  <td><?= $data["rute_to"]; ?></td>
                  <td><?= $data["price"]; ?></td>
                  <td>
                       <a class="btn btn-info" href="editrute.php?id=<?= $data["id"] ; ?>">Edit</a>
                     <a class="btn btn-danger" href="hapusrute.php?id=<?= $data["id"] ; ?>" onclick = "return confirm('Yakin Ingin Menghapus Data ???')">Hapus</a>
                  </td>
                  
                </tr>
               <?php
                $i++;
              //endwhile;
              endforeach;
               ?>
              </tbody>
            </table>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>