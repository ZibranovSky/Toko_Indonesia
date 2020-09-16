<?php 


	include('koneksi.php');

	$ab = $_GET['x'];

	$sqldel = mysqli_query($koneksi, "DELETE FROM barang WHERE id = '$ab' "); 

	if ($sqldel) {
		header("location: brg_data.php");
	}else{
		echo "Data Belum Di Hapus";
	}
?>