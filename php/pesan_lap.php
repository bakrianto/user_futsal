<?php 
	include 'koneksi.php';

	$query = "SELECT * FROM users WHERE username='$_GET[username]'";
	$query2 = "SELECT * FROM jam ORDER BY id_jam ASC";
	$query3 = "SELECT * FROM jam ORDER BY id_jam ASC";
	$q2 = mysqli_query($conn, $query2);
	$q3 = mysqli_query($conn, $query3);
	$q = mysqli_query($conn, $query);

	while ($data = mysqli_fetch_assoc($q)) {
		$url = 'http://localhost/user_futsal/php/aksi_pesan.php';
		echo "
		<form method='post' action=$url class='form-user'>
			<div class='form-group'>
				<label>Nama Lengkap</label>
				<input type='text' name='nama' id='disabledInput' class='form-control user' value='$data[username]' disabled>
			</div>
			<div class='form-group'>
				<label>Email</label>
				<input type='email' name='email' id='disabledInput' class='form-control email' value='$data[email]' disabled>
			</div>
			<div class='form-group'>
				<label>No Telepon</label>
				<input type='no' name='no_hp' id='disabledInput' class='form-control no_telp' value='$data[no_telp]' disabled>		
			</div>
			<div class='form-group'>
				<label>Alamat</label>
				<fieldset disabled><textarea name='alamat' id='disabledInput' class='form-control alamat' rows='1'>$data[alamat_lengkap]</textarea></fieldset>		
			</div>
			<div class='form-group'>
				<label>Nama Lapangan</label>
				<input type='text' class='form-control' name='nama_lapangan' value='Lapangan 1'>
			</div>

			<label>Jam</label> "; ?>
			<div>
				<select name="mulai" id="mulai" class='form-control'>
				<option value=''>Jam mulai</option>
					<?php 
					if ($r = mysqli_num_rows($q2)) {?>
						<?php while ($data2 = mysqli_fetch_assoc($q2)) { ?>
							<option class="mulai" value='<?php echo $data2['jam_mulai']; ?>'><?php echo $data2['jam_mulai']; ?></option>
						<?php } ?>
					<?php } ?>
				</select>				
			</div>

			<div>
				<select name="selesai" id="selesai" class="form-control">
					<option value="">Jam Selesai</option>
					<?php if ($r2 = mysqli_num_rows($q3)) {?>
						<?php while ($data3 = mysqli_fetch_assoc($q3)) { ?>
							<option class="selesai" value='<?php echo $data3['jam_selesai']; ?>'><?php echo $data3['jam_selesai']; ?></option>
						<?php } ?>
					<?php } ?>
				</select>
			</div>
			<?php echo "
			<div class='form-group'>
				<label>Harga</label>
				<input class='form-control harga' id='harga' type='text'>
			</div>
			<script>
				$(document).ready(function(){

					$('select').on('change', function(e){
						var mulai = parseInt($('#mulai option:selected').val());
						var selesai = parseInt($('#selesai option:selected').val());
						var durasi = selesai - mulai;
						var total = durasi * 70000;
						$('#harga').val(total);
					});

				});
			</script>
			<div>
				<input class='btn btn-primary' type='submit' value='Pesan Sekarang'>
			</div>
		</form>

		";
	}
?>