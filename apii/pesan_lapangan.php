<?php 
echo "<div class='col-md-12'>
		<h3>Pesan Lapangan</h3>
	</div>
	<div class='col-md-12'>
		<form method='post' class='form-user'>
			<div class='form-group'>
				<label>Nama Lengkap</label>
				<input type='text' name='nama' class='form-control user' placeholder='Nama Lengkap'>
			</div>
			<div class='form-group'>
				<label>Email</label>
				<input type='email' name='email' class='form-control user' placeholder='Email'>
			</div>
			<div class='form-group'>
				<label>No Telepon</label>
				<input type='no' name='no_hp' class='form-control user' placeholder='No HP'>		
			</div>
			<div class='form-group'>
				<label>Alamat</label>
				<textarea name='alamat' class='form-control user' rows='1'></textarea>		
			</div>
			<div class='form-group'>
				<label>Nama Lapangan</label>
				<input type='text' class='form-control' name='nama_lapangan' placeholder='Nama Lapangan'>
			</div>
			<div class='form-group'>
				<label>Jam</label>
				<input class='form-control' name='mulai' placeholder='mulai'>
				<input class='form-control' name='selesai' placeholder='selesai'>
			</div>
			<div class='form-group'>
				<label>Harga</label>
				<input class='form-control' name='harga_sewa' placeholder='Harga Sewa'>
			</div>
			<div>
				<input class='btn btn-primary tombol-pesan' type='submit' value='Pesan Sekarang'>
			</div>
		</form>
	</div>";
?>