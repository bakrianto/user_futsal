<?php 
	include "db_config.php";
	$query = "UPDATE users SET username='".$_POST['username']."', nama_lengkap='".$_POST['nama_lengkap']."', email='".$_POST['email']."', no_telp='".$_POST['no_telp']."', alamat_lengkap='".$_POST['alamat_lengkap']."' WHERE username='"$_POST['username']"' ";

	$query = "SELECT * FROM users WHERE username='".$_POST['username']."' ";
	$q = mysqli_query($mysqli, $query);
	$hasil = mysqli_fetch_object($q);

?>