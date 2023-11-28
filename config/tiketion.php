<?php
	require 'config/koneksi.php' ;
	function read($lola){
		global $koneksi;
		$result = mysqli_query($koneksi, $lola);
        $datas = [] ;
        while ($data = mysqli_fetch_assoc($result) ) {
            $datas [] = $data ;
        }
        return $datas ;
    }

    	function tiket($data) {
    		global $koneksi ;
    		$depart_at= htmlspecialchars($data["depart_at"]) ;
			$rute_from = htmlspecialchars($data["rute_from"]) ;
			$rute_to = htmlspecialchars($data["rute_to"]) ;
			$price = htmlspecialchars($data["price"]) ;
		
	    	$query = "INSERT INTO rute VALUES('', '$depart_at', '$rute_from', '$rute_to', '$price')" ;

       		mysqli_query($koneksi, $query) ;
        	return mysqli_affected_rows($koneksi) ;
    	}
    	function trans($data) {
    		global $koneksi ;
    		$code= htmlspecialchars($data["code"]) ;
			$description = htmlspecialchars($data["description"]) ;
			$seat_qty = htmlspecialchars($data["seat_qty"]) ;
	    	$query = "INSERT INTO transportation VALUES('', '$code', '$description', '$seat_qty')" ;

       		mysqli_query($koneksi, $query) ;
        	return mysqli_affected_rows($koneksi) ;
    	}

        function plus($pela) {
            global $koneksi ;
            $reservation_code = htmlspecialchars($pela["reservation_code"]) ;
            $reservation_at = htmlspecialchars($pela["reservation_at"]) ;
            $reservation_date = htmlspecialchars($pela["reservation_date"]) ;
            $customerid = htmlspecialchars($pela["customerid"]) ;
            $seat_code = htmlspecialchars($pela["seat_code"]) ;
            $ruteid = htmlspecialchars($pela["ruteid"]) ;
            $depart_at = htmlspecialchars($pela["depart_at"]) ;
            $price = htmlspecialchars($pela["price"]) ;
            $userid = htmlspecialchars($pela["userid"]) ;

            $query = "INSERT INTO reservation VALUES('', ' $reservation_code', '$reservation_at', 
            '$reservation_date', '$customerid', 'seat_code', 'ruteid', 'depart_at', 'price', 'userid')" ;

            mysqli_query($koneksi, $query) ;
            return mysqli_affected_rows($koneksi) ;
        }
        function hapus($id) {
        global $koneksi ;

        mysqli_query($koneksi, "DELETE FROM rute WHERE id=$id") ;
        return mysqli_affected_rows($koneksi) ;
    }

        function edit($bebas) {

        global $koneksi ;
        $id = htmlspecialchars($bebas["id"]) ;
        $depart_at = htmlspecialchars($bebas["depart_at"]) ;
        $rute_from = htmlspecialchars($bebas["rute_from"]) ;
        $rute_to = htmlspecialchars($bebas["rute_to"]) ;
        $price = htmlspecialchars($bebas["price"]) ;

         $query = "UPDATE rute SET depart_at='$depart_at', rute_from='$rute_from', rute_to='$rute_to', price='$price' WHERE id=$id" ;

        mysqli_query($koneksi, $query) ;
        return mysqli_affected_rows($koneksi) ;
   }


    ?>