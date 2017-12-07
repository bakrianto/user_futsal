<?php 
 include 'koneksi.php';

 $query = "SELECT * FROM users WHERE username='$_GET[username]'";

 $q = mysqli_query($conn, $query);

 while ($data = mysqli_fetch_assoc($q)) {

 	echo "
 		<div class='col-md-12'>
				<h3>Edit Profile</h3>		
			</div>
			<div class='col-md-12'>
			<form method='post'>
				<h4>Username</h4>
				<input class='form-control user' name='username' value='$user'>
				<h4>Nama Lengkap</h4>
				<input class='form-control nama' name='nama_lengkap' value='$nama'>
				<h4>Email</h4>
				<input class='form-control email' name='email' value='$email'>
				<h4>No HP</h4>
				<input class='form-control no' name='no_telp' value='$no'>
				<h4>Alamat</h4>
				<input class='form-control alamat' name='alamat_lengkap' value='$alamat'>
				<input type='submit' class='btn btn-info update' name='submit' value='Update'/>
			</form>
		</div>
 	";
 	echo "<script>
 		$(document).ready(function(){
			$('#login').click(function(e){
			e.preventDefault();
			var user = $('.user').val();
		 	var nama = $('.nama').val();
		 	var email = $('.email').val();
		 	var no = $('.no').val();
		 	var alamat = $('.alamat').val();

		 	if (user == '' || nama == '' || email == '' || no == '' || alamat == '') {
		 		alert ('jangan kosongkan field');
			} else {
		 		
		 		$.post('http://aplikasifutsal.000webhostapp.com/php/update_profile.php', {username: user, nama_lengkap:nama, email:email, no_tlp:no, alamat_lengkap:alamat}, function(q) {
		 				if (q == 'berhasil update') {
		 					alert ('berhasil update');
		 					$('.home').show();
							$('.home').load('home.html');
							$('.login').hide();
		 				} else if (q == 'gagal update') {
		 					alert ('gagal update');
		 				}
		 		});
		 	}
		 	
		});
 	</script>";
 }
?>