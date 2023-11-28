<?php
	require 'config/functionadmin.php' ;
	require 'config/koneksi.php' ;

	$id = $_GET["id"] ;
	if (hapusadmin($id)) {
		echo "<script>
				alert('Berhasil Menghapus Akun ADMIN !!!');
				window.location.href = 'admin.php' ;
		     </script>";
	} else {
		echo "<script>
				alert('GAGALL !!!! Menghapus Akun ADMIN');
				window.location.href = 'admin.php' ;
			</script>";
	}
?>