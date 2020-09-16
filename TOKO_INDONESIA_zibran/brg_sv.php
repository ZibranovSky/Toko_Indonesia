<?php 
if (isset($_POST['save'])) {
	include 'koneksi.php';
	$a1 = $_POST['id'];
	$a2 = $_POST['kategori'];
	$a3 = $_POST['nama'];
	$a4 = $_POST['harga'];
	$a5 = $_POST['stok'];
	$a6 = $_POST['supplier'];

	$save = "INSERT INTO barang () VALUES('$a1','$a2','$a3','$a4','$a5','$a6')";
	$result	= mysqli_query($koneksi, $save);

	if ($result) {
		header("location: brg_data.php");
	}else{
		echo "gagal disimpan";
	}

}
 ?>