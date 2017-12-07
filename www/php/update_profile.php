<?php 
	include 'koneksi.php';

	$query = "UPDATE users SET username='$_POST[username]', nama_lengkap='$_POST[nama_lengkap]', email='$_POST[email]', no_telp='$_POST[no_telp]', alamat_lengkap='$_POST[alamat_lengkap]' WHERE username='$_POST[username]'";
	
	if ($q = mysqli_query($conn, $query)) {
		echo "berhasil update";
	} else {
		echo "gagal update";
	}
?>