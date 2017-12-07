<?php 
	include "koneksi.php";
	$no = 1;
	$sql = "SELECT * FROM laporan";
	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_object($result)) {
		echo		"<tr>";
		echo			"<td>".$no++."</td>";
		echo			"<td>".$row->jam_mulai."</td>";
		echo			"<td>".$row->jam_selesai."</td>";
		echo			"<td>".$row->status_pesanan."</td>";
		echo			"<td>".$row->username."</td>";
		echo		"</tr>";
	}
?>