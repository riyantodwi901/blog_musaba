<?php
include 'koneksi.php';

function query($query) {
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$data = [];
	while($aray = mysqli_fetch_assoc($result) ) {
		$data[] = $aray;
	}
	return $data;
}
?>