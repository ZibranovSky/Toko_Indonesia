<?php 
include 'koneksi.php';
$dgv = "SELECT * FROM barang";
$result = mysqli_query($koneksi, $dgv) or die();
 ?> 

<head>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<title>Data Barang Toko Indonesia</title>
</head>
</head>
<center>
 <body>
<h3>Data Barang Toko Indonesia</h3>
<form action="" method="POST" class="form-cari">

		<input type="text" name="keyword" size="40" autofocus placeholder="" autocomplete="off" id="keyword">	
		<button type="submit" name="cari" id="tombol-cari">Cari</button>

			
	</form>
 	<table border="1" class="table">
 	<tr>
 		<th>id</th>
 		<th>kategori</th>
 		<th>nama</th>
 		<th>harga</th>
 		<th>stok</th>
 		<th>supplier</th>
 		<th>Aksi</th>
 	</tr>	

 	<?php 
while ($data = mysqli_fetch_assoc($result)) {
	
 	 ?>

 	 <tr>
 	 	<td><?php echo $data['id']; ?></td>
 	 	<td><?php echo $data['kategori']; ?></td>
 	 	<td><?php echo $data['nama']; ?></td>
 	 	<td><?php echo $data['harga']; ?></td>
 	 	<td><?php echo $data['stok']; ?></td>
 	 	<td><?php echo $data['supplier']; ?></td>
 	 	<td><a href="brg_del.php?x=<?php echo $data['id']; ?>"><button class="btn btn-danger">HAPUS</button></a>|<a href="brg_edit.php?y=<?php echo $data['id']; ?>"><button class="btn btn-success">UBAH</button></a></td>
 	 </tr>
 	 <?php 
 	}
 	  ?>
</table>
<a href="barang_form.php" style="text-decoration: none;"><button class="btn btn-success">INPUT DATA</button></a>  |<a href="index.html"><button class="btn btn-warning">KEMBALI	</button></a> | <button class="" onclick="window.print()">CETAK</button>
</center>

 </body>


