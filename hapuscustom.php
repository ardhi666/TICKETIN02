<?php
	require 'config/functioncustom.php' ;
	require 'config/koneksi.php' ;

	$id = $_GET["id"] ;
	if (hapuscustom($id)) {
		echo "<script>
				alert('Berhasil Menghapus Akun Customer !!!');
				window.location.href = 'datacustom.php' ;
		     </script>";
	} else {
		echo "<script>
				alert('GAGALL !!!! Menghapus Akun Customer);
				window.location.href = 'datacustom.php' ;
			</script>";
	}
?>