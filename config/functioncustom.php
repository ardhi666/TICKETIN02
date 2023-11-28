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
 
function register($data) {

	global $koneksi ;
	$username = htmlspecialchars($data['nama']) ;
    $password = htmlspecialchars($data['password']) ;
    $password2 = htmlspecialchars($data['password2']) ;
    $email = htmlspecialchars($data['alamat']) ;
    $phone = htmlspecialchars($data['phone']) ;
    $gender = htmlspecialchars($data['gender']) ;

    //Cek Username
   $result = mysqli_query($koneksi, "SELECT nama FROM customer WHERE nama = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert ('Username Sudah terdaftar');
             </script>";
        return false ;
    }

    //Confirm Passoword
    if ($password !== $password2) {
    	echo "<script>
    			alert('	Confirm Password tidak sesuai !!!');
    		</script>";
    
    	return false ;
    }
    	
    // Enkripsi password
    //$password = password_hash($password, PASSWORD_DEFAULT) ;
    $password = md5($password) ;

    // tambah userbaru ke database
    mysqli_query($koneksi, "INSERT INTO customer VALUES('', '$username', '$password', '$email', '$phone', '$gender')");

    return mysqli_affected_rows($koneksi) ;
	}

    function login($data) {

        global $koneksi ;
        $username = $data["nama"] ;
        $password = $data["password"] ;

         $result =  "SELECT * FROM customer WHERE nama = '$username' AND password= md5('$password') 
         OR password='$password'";

         mysqli_query($koneksi, $result) ;
         return mysqli_affected_rows($koneksi) ;

    }
        function hapuscustom($id) {
        global $koneksi ;

        mysqli_query($koneksi, "DELETE FROM customer WHERE id=$id") ;
        return mysqli_affected_rows($koneksi) ;
    }

    ?>