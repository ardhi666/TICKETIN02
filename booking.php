<?php
    require 'config/koneksi.php' ;
    require 'config/tiketion.php' ;

    if (isset($_POST["submit"])) {
      if (tiket($_POST) > 0) {
        echo "<script>
                  alert('BERHASIL !!!') ;
              	  window.location.href = 'transp.php' ;
              </script>";
      } else {
        echo "<script>
                  alert('GAGAL !!!!') ;
                  
                </script>";
      }
    }

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Booking Tiket</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-4">
        		<div class="card mt-5">
        			<div class="card-header"><h5 class="text-center">BOOKING TIKET KERETA API</h5></div>
       				 	<div class="card-body">
		<form action="" method="post">
		  <div class="container">
		    <div class="form-group">
		      <label for="text">Tanggal</label>
		      <input type="text" class="form-control" id="text" name="depart_at" >
		    </div>
		    <div class="form-group ">
		      <label for="text">Rute Dari</label>
		      <input type="text" class="form-control" id="text" name="rute_from" >
		    </div>
		
		  <div class="form-group ">
		    <label for="text">Rute Ke</label>
		    <input type="text" class="form-control" id="text" name="rute_to">
		  </div>
		  <div class="form-group ">
		    <label for="text">Harga</label>
		    <input type="text" class="form-control" id="price" name="price" >
		  </div>
		   <div class="col-md-6 mx-auto mt-3">
		       <button type="submit" name="submit" class="btn btn-primary btn-lg">PESAN</button>
		   </div>
		</div>
		</form>		
	</div>
</div>
</div>
</div>
</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script></body>
</html>