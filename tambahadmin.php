<?php

	require 'config/koneksi.php' ;
	require 'config/functionadmin.php' ;

	if (isset($_POST["submit"])) {
		if (plus($_POST) > 0 ) {
			echo "<script>
					alert ('Berhasil Menambah Akun ADMIN !!!');
					window.location.href = 'admin.php' ;
				 </script>";
		}else{
			echo "<script>
					alert ('GAGAL!!! TIDAK BISA Menambah Akun ADMIN !!!');
					window.location.href = 'admin.php' ;
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
        			<div class="card-header"><h5 class="text-center">TAMBAH DATA ADMIN</h5></div>
       				 	<div class="card-body">
		<form action="" method="post">
		  <div class="container">
		    <div class="form-group">
		      <label for="username">Username</label>
		      <input type="text" class="form-control" id="username" name="username" >
		    </div>
		    <div class="form-group ">
		      <label for="password">Password</label>
		      <input type="password" class="form-control" id="password" name="password" >
		    </div>
		
		  <div class="form-group ">
		    <label for="nama">Nama Lengkap</label>
		    <input type="text" class="form-control" id="fullname" name="fullname">
		  </div>
		  <div class="form-group ">
		    <label for="level">Level</label>
		    <input type="text" class="form-control" id="level" name="level" >
		  </div>
		   <div class="col-md-6 mx-auto mt-3">
		       <button type="submit" name="submit" class="btn btn-primary btn-lg">TAMBAH ADMIN</button>
		   </div>
		</div>
		</form>		
	</div>
</div>
</div>
</div>
</div>
