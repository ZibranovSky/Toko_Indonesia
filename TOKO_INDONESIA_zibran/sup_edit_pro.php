<?php 

include ('koneksi.php');

if (isset($_POST['edit'])) {
	
	$a1 = $_POST['id'];
	$a2 = $_POST['nama'];
	$a3 = $_POST['alamat'];
	$a4 = $_POST['kota'];
	$a5 = $_POST['tlp'];
	

	$edit = mysqli_query($koneksi, "UPDATE suplier SET nama ='$a2', alamat = '$a3', kota = '$a4', tlp ='$a5' WHERE id = '$a1' ");


	if ($edit) {
		header("location: sup_data.php");
	}else{
		echo "gagal";
	}
}


 ?>