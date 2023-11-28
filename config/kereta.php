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
        function hapus($id) {
        global $koneksi ;

        mysqli_query($koneksi, "DELETE FROM transportation WHERE id=$id") ;
        return mysqli_affected_rows($koneksi) ;
    }

    	function edit($bebas) {

        global $koneksi ;
        $id = htmlspecialchars($bebas["id"]) ;
        $code = htmlspecialchars($bebas["code"]) ;
        $description = htmlspecialchars($bebas["description"]) ;
        $seat_qty = htmlspecialchars($bebas["seat_qty"]) ;

         $query = "UPDATE transportation SET code='$code', description='$description', seat_qty='$seat_qty' WHERE id=$id" ;

        mysqli_query($koneksi, $query) ;
        return mysqli_affected_rows($koneksi) ;
   }
?>