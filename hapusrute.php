<?php
	require 'config/tiketion.php' ;
	require 'config/koneksi.php' ;

	$id = $_GET["id"] ;
	if (hapus($id)) {
		echo "<script>
				alert('Berhasil Menghapus Tiket yang telah dipesan !!!');
				window.location.href = 'datapesan.php' ;
		     </script>";
	} else {
		echo "<script>
				alert('GAGALL !!!! Menghapus Tiket yang telah dipesan');
				window.location.href = 'datapesan.php' ;
			</script>";
	}
?>