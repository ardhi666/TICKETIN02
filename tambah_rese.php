<?php

	require 'config/koneksi.php' ;
	require 'config/tiketion.php' ;

	if (isset($_POST["blok"])) {
		if (plus($_POST) > 0 ) {
			echo "<script>
					alert ('Berhasil Menambah  !!!');
					window.location.href = 'reservation.php' ;
				 </script>";
		}else{
			echo "<script>
					alert ('GAGAL!!! TIDAK BISA Menambah !!!');
					
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
		<title>Tambah Data Admin</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-4">
        		<div class="card mt-5">
        			<div class="card-header"><h5 class="text-center">TAMBAH RESERVATION</h5></div>
       				 	<div class="card-body">
		<form action="" method="post">
		  <div class="container">
		    <div class="Reservation Code">
		      <label for="text">Kode Berangkat</label>
		      <input type="text" class="form-control" id="text" name="reservation_code" >
		    </div>
		    <div class="form-group ">
		      <label for="text">Berangkat Dari</label>
		      <input type="text" class="form-control" id="text" name="reservation_at" >
		    </div>
		
		  <div class="form-group ">
		    <label for="nama">Tanggal Berangkat</label>
		    <input type="text" class="form-control" id="text" name="reservation_date">
		  </div>
		  <div class="form-group ">
		    <label for="text">Customer ID</label>
		    <input type="text" class="form-control" id="text" name="customerid" >
		  </div>
		  <div class="form-group ">
		    <label for="text">Code Kursi</label>
		    <input type="text" class="form-control" id="text" name="seat_code" >
		  </div>
		  <div class="form-group ">
		    <label for="text">Rute ID</label>
		    <input type="text" class="form-control" id="text" name="ruteid" >
		  </div>
		  <div class="form-group ">
		    <label for="text">Tujuan</label>
		    <input type="text" class="form-control" id="text" name="depart_at" >
		  </div>
		  <div class="form-group ">
		    <label for="text">Price</label>
		    <input type="text" class="form-control" id="text" name="price" >
		  </div>
		  <div class="form-group ">
		    <label for="text">User ID</label>
		    <input type="text" class="form-control" id="text" name="userid" >
		  </div>
		   <div class="col-md-6 mx-auto mt-3">
		       <button type="submit" name="blok" class="btn btn-primary btn-lg">TAMBAH</button>
		   </div>
		</div>
		</form>		
	</div>
</div>
</div>
</div>
</div>
