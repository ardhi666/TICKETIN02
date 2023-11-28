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
 
	function admin($admindata) {
		global $koneksi ;
		$username = htmlspecialchars($admindata["username"]) ;
		$password = htmlspecialchars($admindata["password"]) ;

		$query = "SELECT * FROM user WHERE username = '$username' AND password='$password'";

		mysqli_query($koneksi, $query) ;
        return mysqli_affected_rows($koneksi) ;

	}

	function plus($admindata) {
		global $koneksi ;
		$username = htmlspecialchars($admindata["username"]) ;
		$password = htmlspecialchars($admindata["password"]) ;
		$nama = htmlspecialchars($admindata["fullname"]) ;
		$level = htmlspecialchars($admindata["level"]) ;

	    $query = "INSERT INTO user VALUES('', '$username', '$password', '$nama', '$level')" ;

        mysqli_query($koneksi, $query) ;
        return mysqli_affected_rows($koneksi) ;
	}

	function hapusadmin($id) {
		global $koneksi ;

		mysqli_query($koneksi, "DELETE FROM user WHERE id=$id") ;
        return mysqli_affected_rows($koneksi) ;
	}

	function edit($bebas) {

        global $koneksi ;
        $id = htmlspecialchars($bebas["id"]) ;
        $username = htmlspecialchars($bebas["username"]) ;
        $password = htmlspecialchars($bebas["password"]) ;
        $fullname = htmlspecialchars($bebas["fullname"]) ;
        $level = htmlspecialchars($bebas["level"]) ;

        $query = "UPDATE user SET username='$username', password='$password', fullname='$fullname', level='$level' WHERE id=$id" ;

        mysqli_query($koneksi, $query) ;
        return mysqli_affected_rows($koneksi) ;
   }

	
?>