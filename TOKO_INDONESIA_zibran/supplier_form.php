<head>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<title>Form Supplier</title>
</head>
<body>
<center>
	<form action="sup_sv.php" method="post">
	<h1>Form Input Data Supplier</h1>
	<table>
		<tr>
			<td>id</td>
			<td>:</td>
			<td><input type="text" name="id" required="" class="form-control" maxlength="4"></td>
		</tr>
			<tr>
			<td>Nama Supplier</td>
			<td>:</td>
			<td><input type="text" name="nama" required="" class="form-control"></td>
		</tr>
			<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name="alamat" required="" class="form-control"></td>
		</tr>
			<tr>
			<td>Kota</td>
			<td>:</td>
			<td><input type="text" name="kota" required="" class="form-control"></td>
		</tr>
			<tr>
			<td>Telepon</td>
			<td>:</td>
			<td><input type="text" name="tlp" required="" class="form-control"></td>
		
		</tr>
		
			
			<td><button type="submit" name="save" class="btn btn-success">SIMPAN</button>|<button type="reset" class="btn btn-danger" name="reset">BATAL</button> | <a href="sup_data.php" style="text-decoration: none; color: blue;">LIHAT DATA</a></td>
		</tr>
		</form>
	</table>
</center>