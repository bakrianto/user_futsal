<?php 
 include 'koneksi.php';

 $query = "SELECT * FROM users WHERE username='$_GET[username]'";

 $q = mysqli_query($conn, $query);

 while ($data = mysqli_fetch_assoc($q)) {
 	$user = $data['username'];
 	$nama = $data['nama_lengkap'];
 	$email = $data['email'];
 	$no = $data['no_telp'];
 	$alamat = $data['alamat_lengkap'];
 	$url = "http://localhost/user_futsal/php/update_profile.php";
 	echo "
 		<div class='col-md-12'>
				<h3>Edit Profile</h3>		
			</div>
			<div class='col-md-12'>
			<form action='$url' method='post'>
				<h4>Username</h4>
				<input class='form-control user' name='username' value='$user'>
				<h4>Nama Lengkap</h4>
				<input class='form-control' name='nama_lengkap' value='$nama'>
				<h4>Email</h4>
				<input class='form-control' name='email' value='$email'>
				<h4>No HP</h4>
				<input class='form-control' name='no_telp' value='$no'>
				<h4>Alamat</h4>
				<input class='form-control' name='alamat_lengkap' value='$alamat'>
				<input type='submit' class='btn btn-info' name='submit' value='Update'/>
			</form>
		</div>
 	";
 }
?>