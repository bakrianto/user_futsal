<?php 
session_start();
if ($_SESSION['username']=='bambang') {
	echo "
	<div class='col-md-12 text-center'>
  		<h4>Selamat Datang!</h4>
  		<strong><p>Member</p></strong>
  		<strong><p></p></strong>
	</div>
	    <div>
	      <img src='' class='img-rounded'>
	    </div>
	    <div class='row'>
	      <a href='pesan_lapangan.html'><button class=btn btn-lg btn-default btn-block pesan-lap'>Pesan Lapangan</button></a>      
	    </div>
	  	<div class='row'>
	  		<a href='jadwal.html'><button class='btn btn-lg btn-default btn-block btn-jadwal'>Jadwal</button></a>  		
	  	</div>
	  	<div class='row'>
	  		<a href='edit_profile.html'><button class='btn btn-lg btn-default btn-block'>Edit Profile</button></a>  		
	  	</div>
	  	<div class='row'>
	  		<a href='ubah_password.html'><button class='btn btn-lg btn-default btn-block'>Ubah Password</button></a>  		
	  	</div>
	  	<div class='row'>
	  		<a href='http://localhost/user_futsal/'><button class='btn btn-lg btn-default btn-block'>Logout</button></a>
    	</div>
";
}
?>