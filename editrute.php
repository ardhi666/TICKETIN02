<?php
	require 'config/tiketion.php' ;
	require 'config/koneksi.php' ;

	$id = $_GET["id"];
	$bebas = read("SELECT * FROM rute WHERE id=$id")[0] ;

if (isset($_POST['submit'])) {
	if (edit($_POST) > 0) {
		echo "<script>
			alert('Berhasil EDIT Data Pilot') ;
			
		</script>";
		
	} else {
		echo "<script>
			alert('GAGAALLL !!! EDIT Data Pilot') ;
			
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
		<title>EDIT Data Pilot</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
<div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4">
            <div class="card mt-5">
              <div class="card-header"><h5 class="text-center">EDIT RUTE YANG TELAH DIBELI</h5></div>
                <div class="card-body">
		<form action="" method="post">
		  
		  	<div class="form-group">
		      <input type="hidden" class="form-control" id="id" name="id" value="<?= $bebas["id"] ; ?>"  >
		    </div>
		    <div class="form-group ">
		      <label for="text">Tanggal</label>
		      <input type="text" class="form-control" id="nama" name="depart_at" value="<?= $bebas["depart_at"] ; ?>" >
		    </div>
		    <div class="form-group ">
		      <label for="text"></label>
		      <input type="text" class="form-control" id="text" name="rute_from" value="<?= $bebas["rute_from"] ; ?>" >
		    </div>
		
		  <div class="form-group ">
		    <label for="text"></label>
		    <input type="text" class="form-control" id="text" name="rute_to" value="<?= $bebas["rute_to"] ; ?>">
		  </div>
		  <div class="form-group ">
		    <label for="harga">Harga </label>
		    <input type="text" class="form-control" id="harga" name="price" value="<?= $bebas["price"] ; ?>" >
		  </div>
		  <div class="d-grid gap-2 col-4 mx-auto mt-3">
		  <button type="submit" name="submit" class="btn btn-primary btn-sm">EDIT DATA</button>
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