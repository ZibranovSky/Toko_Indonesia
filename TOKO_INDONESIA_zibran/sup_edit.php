<?php 
	include('koneksi.php');

	$ab = $_GET['y'];

	$query = mysqli_query($koneksi, "SELECT * FROM suplier WHERE id = '$ab' ");

	$res = mysqli_fetch_array($query);
 ?>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<title>Form Supplier</title>
</head>
<body>
<center>
	<form action="sup_edit_pro.php" method="POST">
	<h1>Form Input Data Supplier</h1>
	<table>
		<tr>
			<td>id</td>
			<td>:</td>
			<td><input type="text" readonly="" name="id" class="form-control"  value="<?php echo $res['id']; ?>"></td>
		</tr>
			<tr>
			<td>Nama Supplier</td>
			<td>:</td>
			<td><input type="text" name="nama" class="form-control"  value="<?php echo $res['nama']; ?>"></td>
		</tr>
			<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name="alamat" class="form-control"  value="<?php echo $res['alamat']; ?>"></td>
		</tr>
			<tr>
			<td>Kota</td>
			<td>:</td>
			<td><input type="text" name="kota" class="form-control"  value="<?php echo $res['kota']; ?>"></td>
		</tr>
			<tr>
			<td>Telepon</td>
			<td>:</td>
			<td><input type="text" name="tlp" class="form-control"  value="<?php echo $res['tlp']; ?>"></td>
		
		</tr>
		
			
			<td><button type="submit" name="edit" class="button">EDIT</button>|<button type="reset" name="reset">BATAL</button></td>
		</tr>
		</form>
	</table>
</center>