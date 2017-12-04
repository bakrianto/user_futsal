<?php 
	include 'koneksi.php';

	$query = "UPDATE users SET username='$_POST[username]', nama_lengkap='$_POST[nama_lengkap]', email='$_POST[email]', no_telp='$_POST[no_telp]', alamat_lengkap='$_POST[alamat_lengkap]' WHERE username='$_POST[username]'";
	$q = mysqli_query($conn, $query);
	echo "<script>
		window.location.href = 'http://localhost/user_futsal/home.html';
	</script>";
?>