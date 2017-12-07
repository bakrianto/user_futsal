<?php 
include 'koneksi.php';

$query = "SELECT * FROM users";
$q = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($q);
$d = array(
	'username' => $data['username'],
	'nama' => $data['nama_lengkap'],
	'no' => $data['no_telp']
	);
while ($data) {
	echo "<pre>", print_r($data);
}
?>