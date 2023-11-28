<?php
    require 'config/koneksi.php' ;
    require 'config/tiketion.php' ;

    if (isset($_POST["tambah"])) {
      if (trans($_POST) > 0) {
        echo "<script>
                  alert('BERHASIL Membooking Tiket') ;
              	  window.location.href = 'reservation.php' ;
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
        			<div class="card-header"><h5 class="text-center">KERETA API</h5></div>
       				 	<div class="card-body">
		<form action="" method="post">
		  <div class="container">
		    <div class="form-group">
		      <label for="text">Code</label>
		      <input type="text" class="form-control" id="text" name="code" >
		    </div>
		    <div class="form-group ">
		      <label for="text">Nama Kereta Api </label>
		      <input type="text" class="form-control" id="text" name="description" >
		    </div>
		
		  <div class="form-group ">
		    <label for="text">Kursi</label>
		    <input type="text" class="form-control" id="text" name="seat_qty">
		  </div>
		   <div class="col-md-6 mx-auto mt-3">
		       <button type="submit" name="tambah" class="btn btn-primary btn-lg">Booking</button>
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