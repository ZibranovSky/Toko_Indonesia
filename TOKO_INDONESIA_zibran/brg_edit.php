<?php 
	include('koneksi.php');

	$ab = $_GET['y'];

	$query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id = '$ab' ");

	$res = mysqli_fetch_array($query);
 ?>
 <head>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<title>Form Barang</title>
</head>
<body>
<center>
	<form action="brg_edit_pro.php" method="post">
	<h1>Form Edit Data Barang</h1>
	<table>
		<tr>
			<td>id</td>
			<td>:</td>
			<td><input type="text" readonly="" readonly="" name="id" class="form-control" value="<?php echo $res['id']; ?>"></td>
		</tr>
		
			<tr>
			<td>Kategori Barang</td>
			<td>:</td>
			<td><input type="text" name="kategori" class="form-control" value="<?php echo $res['kategori']; ?>"></td>
		</tr>
			<tr>
			<td>Nama Barang</td>
			<td>:</td>
			<td><input type="text" name="nama" class="form-control" value="<?php echo $res['nama']; ?>" ></td>
		</tr>
			<tr>
			<td>harga</td>
			<td>:</td>
			<td><input type="number" name="harga" class="form-control" value="<?php echo $res['harga']; ?>"></td>
		</tr>
			<tr>
			<td>stok</td>
			<td>:</td>
			<td><input type="number" name="stok" class="form-control" value="<?php echo $res['stok']; ?>"></td>
		
		</tr>
		</tr>
			<tr>
			<td>supplier</td>
			<td>:</td>
			<td><input type="text" name="supplier" class="form-control" value="<?php echo $res['supplier']; ?>"></td>
		
		</tr>
		<tr>
			<td><button type="submit" name="edit" class="button">UBAH</button>|<button type="reset" name="reset">BATAL</button></td>
		</tr>
		</form>
	</table>
</center>
