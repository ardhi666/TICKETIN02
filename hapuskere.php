<?php
	require 'config/kereta.php' ;
	require 'config/koneksi.php' ;

	$id = $_GET["id"] ;
	if (hapus($id)) {
		echo "<script>
				alert('Berhasil Menghapus Nama Kereta Api yang telah dipesan !!!');
				window.location.href = 'sidekereta.php' ;
		     </script>";
	} else {
		echo "<script>
				alert('GAGALL !!!! Menghapus Nama Kereta Api yang telah dipesan');
				window.location.href = 'sidekereta.php' ;
			</script>";
	}
?>