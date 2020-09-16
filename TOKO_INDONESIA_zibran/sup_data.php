<?php 
include 'koneksi.php';
$dgv = "SELECT * FROM suplier";
$result = mysqli_query($koneksi, $dgv) or die();
 ?> 
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<title>Data Supplier Toko Indonesia</title>
</head>
</head>
<center> <body>
<h3>Data Supplier Toko Indonesia</h3>
<form action="" method="POST" class="form-cari">

		<input type="text" name="keyword" size="40" autofocus placeholder="" autocomplete="off" id="keyword">	
		<button type="submit" name="cari" id="tombol-cari">Cari</button>

			
	</form>
 	<table border="1" class="table">
 	<tr>
 		<th>id</th>
 		<th>Nama</th>
 		<th>Alamat</th>
 		<th>Kota</th>
 		<th>Telepon</th>
 		<th>Aksi</th>
 	</tr>

 	<?php 
while ($data = mysqli_fetch_assoc($result)) {
	
 	 ?>

 	 <tr>
 	 	<td><?php echo $data['id']; ?></td>
 	 	<td><?php echo $data['nama']; ?></td>
 	 	<td><?php echo $data['alamat']; ?></td>
 	 	<td><?php echo $data['kota']; ?></td>
 	 	<td><?php echo $data['tlp']; ?></td>
 	 	<td><a href="sup_del.php?x=<?php echo $data['id']; ?>"><button class="btn btn-danger">HAPUS</button></a>|<a href="sup_edit.php?y=<?php echo $data['id']; ?>"><button class="btn btn-success">UBAH</button></a></td>
 	 </tr>
 	 <?php 
 	}
 	  ?>
</table>
<a href="supplier_form.php" style="text-decoration: none;"<button class="btn btn-success">INPUT DATA</button></a>  |<a href="index.html"><button class="btn btn-warning">KEMBALI</button></a> | <button class="" onclick="window.print()">CETAK</button>

</center>
 </body>


