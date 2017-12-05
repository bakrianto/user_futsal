<?php 
	include "db_config.php";

	$query = mysql_query("SELECT * FROM lapangan where id_lapangan='$_POST[id_lapangan]'");
	$r=mysql_fetch_array($query);

	$jumlahh = mysql_query("SELECT * FROM laporan 
	                        where jam_mulai='$_POST[jam_mulai]' 
	                        and jam_selesai='$_POST[jam_selesai]' 
							AND id_lapangan='$_POST[id_lapangan]'");
	$j=mysql_fetch_array($jumlahh);
	$jml = mysql_num_rows($jumlahh);
	
	$jam_mulai   = $_POST['jam_mulai'];
    $jam_selesai = $_POST['jam_selesai'];
    $durasi      = $jam_selesai - $jam_mulai;
	
    $total       = ($r[harga_lapangan]) * $durasi;
    $harga       =  number_format(($total),0,",",".");
	
	
	$sql = mysql_query("INSERT INTO laporan (id_lapangan,
											 jam_mulai,
											 jam_selesai,
											 username,
											 tanggal,
											 total_harga) 
									   VALUES('$_POST[id_lapangan]',
											'$_POST[jam_mulai]',
											'$_POST[jam_selesai]',
											'$_SESSION[namauser]',
											'$tgl_sekarang',
											'$harga')");
?>