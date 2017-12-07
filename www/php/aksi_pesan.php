<?php 
include 'koneksi.php';

	$user = $_POST['username'];
	$id_lapangan = $_POST['id_lap'];
	$mulai = $_POST['jam_mulai'];
	$selesai = $_POST['jam_selesai'];
	$harga = $_POST['harga'];
	$status = $_POST['status_pesanan'];
	$tanggal = date("Ymd");

	$query = "INSERT INTO laporan (id_lapangan, jam_mulai, jam_selesai, total_harga, tanggal, username, status_pesanan) VALUES ('$id_lapangan', '$mulai', '$selesai', '$harga', '$tanggal', '$user', '$status')";

	if ($q = mysqli_query($conn, $query)) {
		echo "berhasil";
	} else {
		echo "gagal";
	}

?>