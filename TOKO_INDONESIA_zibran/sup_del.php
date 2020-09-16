<?php 


	include('koneksi.php');

	$ab = $_GET['x'];

	$sqldel = mysqli_query($koneksi, "DELETE FROM suplier WHERE id = '$ab' "); 

	if ($sqldel) {
		header("location: sup_data.php");
	}else{
		echo "Data Belum Di Hapus";
	}
?>