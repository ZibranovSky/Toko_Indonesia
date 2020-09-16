<?php 
if (isset($_POST['save'])) {
	include 'koneksi.php';
	$a1 = $_POST['id'];
	$a2 = $_POST['nama'];
	$a3 = $_POST['alamat'];
	$a4 = $_POST['kota'];
	$a5 = $_POST['tlp'];

	$save = "INSERT INTO suplier () VALUES('$a1','$a2','$a3','$a4','$a5')";
	$result	= mysqli_query($koneksi, $save);

	if ($result) {
		header("location: sup_data.php");
	}else{
		echo "gagal disimpan";
	}

}
 ?>