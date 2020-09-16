<?php 

include ('koneksi.php');

if (isset($_POST['edit'])) {
	
	$a1 = $_POST['id'];
	$a2 = $_POST['kategori'];
	$a3 = $_POST['nama'];
	$a4 = $_POST['harga'];
	$a5 = $_POST['stok'];
	$a6 = $_POST['supplier'];

	$edit		= mysqli_query($koneksi, "UPDATE barang SET kategori ='$a2', nama = '$a3', harga = '$a4', stok ='$a5', supplier = '$a6' WHERE id = '$a1' ");


	if ($edit) {
		header("location: brg_data.php");
	}else{
		echo "gagal";
	}
}


 ?>