<?php 
require 'db_config.php';
$no = 1;
$sql = "SELECT * FROM laporan";
$result = $mysqli->query($sql);

while ($row = $result->fetch_object()) {

echo		"<tr>";
echo			"<td>".$no++."</td>";
echo			"<td>".$row->jam_mulai."</td>";
echo			"<td>".$row->jam_selesai."</td>";
echo			"<td>".$row->status_pesanan."</td>";
echo			"<td>".$row->username."</td>";
echo		"</tr>";

}
?>