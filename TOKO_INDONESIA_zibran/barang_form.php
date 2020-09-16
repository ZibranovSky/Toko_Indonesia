<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<title>Form Barang</title>
</head>
<body>
<center>
	<form action="brg_sv.php" method="post">
	<h1>Form Input Data Barang</h1>
	<table>
		<tr>
			<td>id</td>
			<td>:</td>
			<td><input type="text" name="id" class="form-control" required="anda harus mengisi field ini" maxlength="6"></td>
		</tr>
			<tr>
			<td>Kategori Barang</td>
			<td>:</td>
			<td><input type="text" name="kategori" class="form-control"  required="anda harus mengisi field ini"></td>
		</tr>
			<tr>
			<td>Nama Barang</td>
			<td>:</td>
			<td><input type="text" name="nama" class="form-control"  required="anda harus mengisi field ini"></td>
		</tr>
			<tr>
			<td>harga</td>
			<td>:</td>
			<td><input type="number" name="harga" class="form-control"  required="anda harus mengisi field ini"></td>
		</tr>
			<tr>
			<td>stok</td>
			<td>:</td>
			<td><input type="number" name="stok" class="form-control"  required="anda harus mengisi field ini"></td>
		
		</tr>
		</tr>
			<tr>
	 			<td>Supplier</th>
	 			<td> : </th>
	 			<td >
	 				<?php 
						include ("koneksi.php");
						$supp = ("SELECT * FROM suplier");
						$result = mysqli_query($koneksi, $supp);

						$jsArray = "var raksupp = new Array();";

						echo '<select class="form-control" name="supplier" onchange="document.getElementById(\'sup\').value = raksupp[this.value]">';
						echo '<option >--- PILIH ---</option>';

						while ($row = mysqli_fetch_array($result)) {
							echo '<option value="'. $row['id'] .'">SPL'.$row['id'].'</option>';
							$jsArray .= "raksupp['". $row['id'] ."'] = '". addslashes($row['nama']) ."';";
						}
						echo '</select>';
					?>
					<script type="text/javascript">
						<?php echo $jsArray; ?>
					</script>
	 			<input type="text" name="supplier" id="sup" readonly="" class="form-control" size="67">
	 			</th>
	 		</tr>
		<tr>
			<td><button type="submit" class="btn btn-success" name="save" class="button">SIMPAN</button>|<button type="reset" class="btn btn-danger" name="reset">BATAL</button> | <a href="brg_data.php" style="text-decoration: none; color: blue;">LIHAT DATA</a>
			</td>

		</tr>
		</form>
	</table>
</center>
</body>
</html>